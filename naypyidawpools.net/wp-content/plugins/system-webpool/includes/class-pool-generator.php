<?php

if( ! defined( 'ABSPATH' ) ) die( 'Invalid request.' );

class Pool_Generator {
    var $link, $text;

    function __construct( $link = '', $slug = '', $text = '' ) {
        $this->link = $link.'&page='.$slug;
        $this->text = $text;
    }

    function render() {
        $this->post();
        $this->html();
    }

    function prize( $length ) {
        $output = '';

        for ($i = 1; $i <= $length; $i++) {
            $output .= rand(0, 9);
        }

        return $output;
    }

    function post() {
        if ( isset( $_POST['new_pool_type'] ) && isset( $_POST['new_pool_month'] ) && isset( $_POST['new_pool_year'] ) ) {
            $post_id    = $_POST['new_pool_type'];
            $post_month = $_POST['new_pool_month'];
            $post_year  = $_POST['new_pool_year'];
            $post_type  = get_post_field( 'post_name', $post_id );
            $post_slug  = str_replace( '-', '_', $post_type );
            $post_title = get_the_title( $post_id );

            $date_input  = $post_year.'-'.$post_month.'-01';
            $date_start  = new DateTime( date('Y-m-d', strtotime($date_input)) );
            $date_stop   = new DateTime( date('Y-m-t', strtotime($date_input)) ); $date_stop->modify( '+1 day' );
            $date_period = new DatePeriod( $date_start, DateInterval::createFromDateString('1 day'), $date_stop );

            $pool_detail = $this->pool_detail( $post_id );
            $last_number = $this->latest_draw_number( $post_type );
            $draw_number = ( $last_number == 0 ) ? $pool_detail->draw_no : ( $last_number + 1 );

            foreach ($date_period as $period) {
                $this->generate( $post_id, $post_type, $post_slug, $post_title, $period, $draw_number, $pool_detail );

                $draw_number++;
            }

            $post_message = $post_title.' post has success generated for '.date( 'F Y', strtotime( $date_input ) );
            add_settings_error('post_success', 'generate_pool', $post_message, 'success');
        }
    }

    function html() {
        require_once POOL_PATH . '/templates/generator.php';
    }

    function generate( $post_id = '', $post_type = '', $post_slug = '', $post_title = '', $period = null, $draw_number = 0, $pool_detail = null ) {
        if ( $this->check( $post_type, $period ) == false ) {
            $post_new = wp_insert_post([
                'post_type'   => $post_type,
                'post_date'   => $period->format( 'Y-m-d H:i:s' ),
                'post_title'  => $post_title.' - '.$period->format( 'd M Y' ),
                'post_status' => 'publish',
            ]);

            update_post_meta( $post_new, $post_slug.'_draw_id', $draw_number );

            for ($m = 1; $m <= $pool_detail->total_prize_main; $m++) {
                update_post_meta( $post_new, $post_slug.'_prize_main_'.$m,        $this->prize( $pool_detail->max_digit ) );
            }
            for ($s = 1; $s <= $pool_detail->total_prize_starter; $s++) {
                update_post_meta( $post_new, $post_slug.'_prize_starter_'.$s,     $this->prize( $pool_detail->max_digit ) );
            }
            for ($c = 1; $c <= $pool_detail->total_prize_consolation; $c++) {
                update_post_meta( $post_new, $post_slug.'_prize_consolation_'.$c, $this->prize( $pool_detail->max_digit ) );
            }
        }
    }

    function check( $post_type = null, $period = null ) {
        if ( $post_type != null && $period != null ) {
            global $wpdb;

            $post_name = $post_type . '-' . $period->format( 'd-M-Y' );
            $query     = "SELECT post_name FROM wp_posts WHERE post_name = '" . $post_name . "' AND post_type = '" . $post_type . "'";

            if( $wpdb->get_row( $query, 'ARRAY_A' ) ) {
                return true;
            } else {
                return false;
            }
        }
    }

    function latest_draw_number( $post_type = null ) {
        if ( $post_type != null ) {
            $slug = str_replace( '-', '_', $post_type );
            $post = get_posts([ 'post_type' => $post_type, 'numberposts' => 1, 'post_status' => 'draft, publish, future, pending, private' ]);
            $numb = get_post_meta( $post[0]->ID, $slug.'_draw_id', true );

            return ( $numb == null ) ? 0 : (int)$numb;
        }
    }

    function pool_detail( $post_id = null ) {
        if ( $post_id != null ) {
            $slug = str_replace( '-', '_', EPS_TYPE );
            return (object)[
                'draw_no'                 => get_post_meta( $post_id, $slug.'_draw_no', true ),
                'max_digit'               => get_post_meta( $post_id, $slug.'_max_digit', true ),
                'livedraw_start'          => get_post_meta( $post_id, $slug.'_livedraw_start', true ),
                'livedraw_stop'           => get_post_meta( $post_id, $slug.'_livedraw_stop', true ),
                'total_prize_main'        => get_post_meta( $post_id, $slug.'_prize_main', true ),
                'total_prize_starter'     => get_post_meta( $post_id, $slug.'_prize_starter', true ),
                'total_prize_consolation' => get_post_meta( $post_id, $slug.'_prize_consolation', true ),
                'export_id'               => get_post_meta( $post_id, $slug.'_export_id', true ),
                'export_code'             => get_post_meta( $post_id, $slug.'_export_code', true ),
                'export_name'             => get_post_meta( $post_id, $slug.'_export_name', true ),
            ];
        }
    }

    function wrapper( $name = '', $label = '', $description = '', $options = [] ) {
        $html  = '<div class="acf-field acf-field-select">';
        $html .= '    <div class="acf-label">';
        $html .= '        <label>'.$label.'</label>';
        $html .= '        <p class="description">'.$description.'</p>';
        $html .= '    </div>';
        $html .= '    <div class="acf-input">';
        $html .= '        <div class="acf-input-wrap">'.$this->selection( $name, $label, $options ).'</div>';
        $html .= '    </div>';
        $html .= '</div>';

        return $html;
    }

    function selection( $name = '', $label = '', $options = [] ) {
        if ( $options != null ) {
            $html  = '<select name="new_pool_'.$name.'">';
            $html .= '    <option disabled selected>-- Select '.$label.' --</option>';
            foreach ( $options as $item) {
                $html .= '<option value="'.$item['key'].'">'.$item['val'].'</option>';
            }
            $html .= '</select>';

            return $html;
        }
    }

    function option_month() {
        $output = [];

        for ($no = 1; $no <= 12; $no++) {
            $output[] = [
                'key' => ( ($no <= 9) ? '0'.$no : $no ),
                'val' => DateTime::createFromFormat( '!m', $no )->format( 'F' ),
            ];
        }

        return $output;
    }

    function option_year() {
        $output = [
            [ 'key' => date('Y', strtotime("+2 year")), 'val' => date('Y', strtotime("+2 year")) ],
            [ 'key' => date('Y', strtotime("+1 year")), 'val' => date('Y', strtotime("+1 year")) ],
            [ 'key' => date('Y'),                       'val' => date('Y') ],
            [ 'key' => date('Y', strtotime("-1 year")), 'val' => date('Y', strtotime("-1 year")) ],
            [ 'key' => date('Y', strtotime("-2 year")), 'val' => date('Y', strtotime("-2 year")) ],
        ];

        return $output;
    }

    function option_post_type() {
        $output = [];

        foreach (get_posts([ 'post_type' => EPS_TYPE, 'numberposts' => -1 ]) as $post) :
            $output[] = [
                'key' => $post->ID,
                'val' => $post->post_title,
            ];
        endforeach;

        return $output;
    }
}