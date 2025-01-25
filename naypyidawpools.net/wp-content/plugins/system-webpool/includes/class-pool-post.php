<?php

if( ! defined( 'ABSPATH' ) ) die( 'Invalid request.' );

class Pool_Post extends Pool_Metabox {
    function __construct() {}

    function register_post_type( $label, $slug, $icon = null, $position = null ) {
        $args = [
            'public'              => true,
            'has_archive'         => true,
            'publicly_queryable'  => true,
            'query_var'           => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'hierarchical'        => false,
            'supports'            => [ 'title', 'revisions' ],
            'taxonomies'          => [],
            'exclude_from_search' => false,
            'labels'              => [
                'name'               => __( $label,                         EPS_TEXTDOMAIN ),
                'singular_name'      => __( $label,                         EPS_TEXTDOMAIN ),
                'add_new'            => __( 'Add New',                      EPS_TEXTDOMAIN ),
                'add_new_item'       => __( 'Add New '.$label,              EPS_TEXTDOMAIN ),
                'edit_item'          => __( 'Edit '.$label,                 EPS_TEXTDOMAIN ),
                'new_item'           => __( 'New '.$label,                  EPS_TEXTDOMAIN ),
                'view_item'          => __( 'View '.$label,                 EPS_TEXTDOMAIN ),
                'search_item'        => __( 'Search '.$label,               EPS_TEXTDOMAIN ),
                'not_found'          => __( 'No '.$label.' Found',          EPS_TEXTDOMAIN ),
                'not_found_in_trash' => __( 'No '.$label.' Found in Trash', EPS_TEXTDOMAIN ),
                'parent_item_colon'  => 'Parent Item',
            ],
        ];

        if ($icon != null) { $args['menu_icon'] = $icon; }
        if ($position != null) { $args['menu_position'] = $position; }
    
        register_post_type( $slug, $args );
    }

    function post_data() {
        $data = [];
        $list = get_posts([ 'post_type' => EPS_TYPE, 'numberposts' => -1 ]);
        
        foreach ( (array)$list as $post ) :
            $detail = $this->detail( $post->ID );
            $data[$post->post_name] = (object)[
                'title'      => $post->post_title,
                'live_begin' => date( 'H:i A', strtotime( $detail->livedraw_start ) ),
                'live_close' => date( 'H:i A', strtotime( $detail->livedraw_stop ) ),
                'time_begin' => date( 'H:i:s', strtotime( $detail->livedraw_start ) ),
                'time_close' => date( 'H:i:s', strtotime( $detail->livedraw_stop ) ),
                'history'    => $this->history( $post->post_name, $detail->livedraw_start, $detail->livedraw_stop ),
                'lastdraw'   => $this->lastdraw( $post->post_name, $detail->livedraw_start, $detail->livedraw_stop ),
                'livedraw'   => $this->livedraw( $post->post_name, $detail->livedraw_start, $detail->livedraw_stop ),
                'countdown'  => $this->countdown( $post->post_name, get_permalink( $detail->livedraw_page ), $detail->livedraw_start, $detail->livedraw_stop ),
                'cd_iframe'  => $this->countdown( $post->post_name, null, $detail->livedraw_start, $detail->livedraw_stop ),
                'is_live'    => $this->is_live( $detail->livedraw_start, $detail->livedraw_stop ),
                'paito'      => $this->paito( $post->post_name, $detail->livedraw_start, $detail->livedraw_stop ),
            ];
        endforeach;

        return $data;
    }

    function post_state( $post_states, $post ) {
        foreach (get_posts([ 'post_type' => EPS_TYPE, 'numberposts' => -1 ]) as $pool) :
            $page_id = $this->detail( $pool->ID )->livedraw_page;

            if ($page_id == $post->ID) :
                $post_states[] = 'Livedraw Page : '.$pool->post_title;
            endif;
        endforeach;

        return $post_states;
    }

    function latest_draw_number( $post_type = null ) {
        if ( $post_type != null ) {
            $post = get_posts([ 'post_type' => $post_type, 'numberposts' => 1, 'post_status' => 'draft, publish, future, pending, private' ]);
            $numb = get_post_meta( $post[0]->ID, str_replace( '-', '_', $post_type ).'_draw_id', true );

            return ( $numb == null ) ? 0 : (int)$numb;
        }
    }

    function detail( $post_id = null ) {
        if ( $post_id != null ) {
            return (object)[
                'id'                      => $post_id,
                'draw_no'                 => get_post_meta( $post_id, EPS_SLUG.'_draw_no', true ),
                'max_digit'               => get_post_meta( $post_id, EPS_SLUG.'_max_digit', true ),
                'livedraw_start'          => get_post_meta( $post_id, EPS_SLUG.'_livedraw_start', true ),
                'livedraw_stop'           => get_post_meta( $post_id, EPS_SLUG.'_livedraw_stop', true ),
                'livedraw_page'           => get_post_meta( $post_id, EPS_SLUG.'_livedraw_page', true ),
                'livedraw_type'           => get_post_meta( $post_id, EPS_SLUG.'_livedraw_type', true ),
                'total_prize_main'        => get_post_meta( $post_id, EPS_SLUG.'_prize_main', true ),
                'total_prize_starter'     => get_post_meta( $post_id, EPS_SLUG.'_prize_starter', true ),
                'total_prize_consolation' => get_post_meta( $post_id, EPS_SLUG.'_prize_consolation', true ),
                'export_id'               => get_post_meta( $post_id, EPS_SLUG.'_export_id', true ),
                'export_code'             => get_post_meta( $post_id, EPS_SLUG.'_export_code', true ),
                'export_name'             => get_post_meta( $post_id, EPS_SLUG.'_export_name', true ),
            ];
        }
    }

    function collect( $post_type = null, $post_id = null, $form = 'history', $is_live = false ) {
        if ( $post_type != null && $post_id != null ) {
            $pool_type = get_post_type( $post_id );
            $pool_id   = get_page_by_path( $pool_type, OBJECT, EPS_TYPE )->ID;
            $pool_slug = str_replace( '-', '_', $pool_type );
            $post_col1 = get_post_meta( $pool_id, 'pool_type_prize_main', true );
            $post_col2 = get_post_meta( $pool_id, 'pool_type_prize_starter', true );
            $post_col3 = get_post_meta( $pool_id, 'pool_type_prize_consolation', true );

            $data = [
                'type'        => get_post_meta( $pool_id, 'pool_type_livedraw_type', true ),
                'date'        => get_the_date( 'Y-m-d', $post_id ),
                'draw_no'     => get_post_meta( $post_id, $pool_slug.'_draw_id', true ),
                'is_live'     => $is_live,
                'main'        => [],
                'starter'     => [],
                'consolation' => [],
            ];

            for ($m = 1; $m <= $post_col1; $m++) {
                $data['main'][$m] = [
                    'gif'     => get_post_meta( $pool_id, 'pool_type_livedraw_gif', true ),
                    'type'    => $post_type,
                    'digits'  => get_post_meta( $post_id, $pool_slug.'_prize_main_'.$m, true ),
                    'form'    => $form,
                    'data'    => 'main',
                    'count'   => $m,
                    'is_live' => $is_live,
                ];
            }
            for ($s = 1; $s <= $post_col2; $s++) {
                $data['starter'][$s] = [
                    'gif'     => get_post_meta( $pool_id, 'pool_type_livedraw_gif', true ),
                    'type'    => $post_type,
                    'digits'  => get_post_meta( $post_id, $pool_slug.'_prize_starter_'.$s, true ),
                    'form'    => $form,
                    'data'    => 'starter',
                    'count'   => $s,
                    'is_live' => $is_live,
                ];
            }
            for ($c = 1; $c <= $post_col3; $c++) {
                $data['consolation'][$c] = [
                    'gif'     => get_post_meta( $pool_id, 'pool_type_livedraw_gif', true ),
                    'type'    => $post_type,
                    'digits'  => get_post_meta( $post_id, $pool_slug.'_prize_consolation_'.$c, true ),
                    'form'    => $form,
                    'data'    => 'consolation',
                    'count'   => $c,
                    'is_live' => $is_live,
                ];
            }

            return (object)$data;
        }
    }

    function history( $post_type, $begin = null, $close = null ) {
        $time_today = (int)strtotime( date( 'H:i:s' ) );
        $time_begin = (int)strtotime( date( $begin.':00' ) );
        $time_close = (int)strtotime( date( $close.':00' ) );

        $output = [];
        $result = new WP_Query([ 'post_type' => $post_type, 'posts_per_page' => -1, 'post_status' => 'publish' ]);
        
        if ( $result->have_posts() ) : while ( $result->have_posts() ) : $result->the_post();
            if ( date( 'Y-m-d' ) == get_the_date( 'Y-m-d' ) ) :
                if ( $time_today > $time_begin && $this->is_live( $begin, $close ) == false ) :
                    $output[] = $this->collect( $post_type, get_the_ID() );
                endif;
            else :
                $output[] = $this->collect( $post_type, get_the_ID() );
            endif;
        endwhile; endif;

        wp_reset_query();

        return (object)$output;
    }

    function paito( $post_type, $begin = null, $close = null ) {
        $history = (array)$this->history( $post_type, $begin, $close );
        $looping = 1;
        $output  = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">';
        $output .= '<table class="table table-sm table-bordered text-center mb-0" id="drawing-table">';
        $output .= '<thead><tr>';
        $output .= '<td class="top" colspan="4">Senin</td>';
        $output .= '<td class="top"></td>';
        $output .= '<td class="top" colspan="4">Selasa</td>';
        $output .= '<td class="top"></td>';
        $output .= '<td class="top" colspan="4">Rabu</td>';
        $output .= '<td class="top"></td>';
        $output .= '<td class="top" colspan="4">Kamis</td>';
        $output .= '<td class="top"></td>';
        $output .= '<td class="top" colspan="4">Jumat</td>';
        $output .= '<td class="top"></td>';
        $output .= '<td class="top" colspan="4">Sabtu</td>';
        $output .= '<td class="top"></td>';
        $output .= '<td class="top" colspan="4">Minggu</td>';
        $output .= '<td class="top"></td>';
        $output .= '</tr></thead>';
        $output .= '<tbody><tr>';

        krsort( $history );

        foreach ( $history as $data ) :
            if ( $looping == 1 ) {
                $loop = 0;

                switch ( strtolower( date( 'l', strtotime( $data->date ) ) ) ) {
                    case 'tuesday':
                        $loop += 1;
                    break;
                    case 'wednesday':
                        $loop += 2;
                    break;
                    case 'thursday':
                        $loop += 3;
                    break;
                    case 'friday':
                        $loop += 4;
                    break;
                    case 'saturday':
                        $loop += 5;
                    break;
                    case 'sunday':
                        $loop += 6;
                    break;
                }

                for ( $l = 1; $l <= $loop; $l++ ) {
                    for ( $n = 1; $n <= 4; $n++ ) {
                        $output .= '<td class="asu"></td>';
                    }
                    $output .= '<td class="asux"></td>';
                }

                $looping += $loop;
            }

            $number = str_split( substr( $data->main[1]['digits'], -4 ) );
            foreach ( $number as $digit ) {
                $output .= '<td class="asu">' . $digit . '</td>';
            }

            $output .= '<td class="asux"></td>';
            $output .= ( $looping % 7 == false ) ? '</tr><tr>' : '';

            $looping++;
        endforeach;

        $output .= '</tr></tbody>';
        $output .= '</table>';

        return $output;
    }

    function lastdraw( $post_type = null, $live_begin = null, $live_close = null ) {
        $time_today = (int)strtotime( date( 'H:i:s' ) );
        $time_begin = (int)strtotime( date( $live_begin.':00' ) );
        $time_close = (int)strtotime( date( $live_close.':00' ) );

        $result = new WP_Query([ 'post_type' => $post_type, 'posts_per_page' => 2, 'post_status' => 'publish' ]);

        if ( $result->have_posts() ) : while ( $result->have_posts() ) : $result->the_post();
            if ( date( 'Y-m-d' ) == get_the_date( 'Y-m-d' ) ) :
                if ( $time_today > $time_begin ) :
                    $output = $this->collect( $post_type, get_the_ID(), 'lastdraw' );
                    wp_reset_query();
                    return (object)$output;
                endif;
            // elseif ( $number <= $post_limit ) :
            //     $output = $this->collect( $post_type, get_the_ID(), 'lastdraw' );
            //     wp_reset_query();
            //     return (object)$output;
            else :
                $output = $this->collect( $post_type, get_the_ID(), 'lastdraw' );
                wp_reset_query();
                return (object)$output;
            endif;
        endwhile; endif;
    }

    function livedraw( $post_type = null ) {
        $result = new WP_Query([ 'post_type' => $post_type, 'posts_per_page' => 1, 'post_status' => 'publish' ]);

        if ( $result->have_posts() ) : while ( $result->have_posts() ) : $result->the_post();
            $output = $this->collect( $post_type, get_the_ID(), 'livedraw', true );

            wp_reset_query();

            return (object)$output;
        endwhile; endif;
    }

    function livedraw_ajax() {
        if ( isset( $_POST[ 'pool_type' ] ) ) :
            $type = $_POST[ 'pool_type' ];
            $pool = $this->livedraw( $type );
            $list = 0;
            $time = 1;
            $data = [];
            $lstm = (array)$this->extract_prize( $type, $pool->main, 'main', $time, $pool->type );
            $lsts = (array)$this->extract_prize( $type, $pool->starter, 'starter', $time, $pool->type );
            $lstc = (array)$this->extract_prize( $type, $pool->consolation, 'consolation', $time, $pool->type );

            foreach ( $lstm as $key => $val ) :
                $data[$list] = $val; $list++;
            endforeach;

            foreach ( $lsts as $key => $val ) :
                $data[$list] = $val; $list++;
            endforeach;

            foreach ( $lstc as $key => $val ) :
                $data[$list] = $val; $list++;
            endforeach;
            
            echo json_encode( $data );

            die();
        endif;
    }

    function countdown( $post_type = null, $post_link = null, $live_begin = null, $live_close = null ) {
        require POOL_PATH . '/templates/countdown.php';

        return $output;
    }

    function is_live( $live_begin = null, $live_close = null ) {
        $time_today = (int)strtotime( date( 'H:i:s' ) );
        $time_begin = (int)strtotime( date( $live_begin.':00' ) );
        $time_close = (int)strtotime( date( $live_close.':00' ) );

        return ( $time_today >= $time_begin && $time_today <= $time_close ) ? true : false;
    }

    function check_live() {
        $list = get_posts([ 'post_type' => EPS_TYPE, 'numberposts' => -1, 'post_status' => 'publish' ]);
        
        foreach ( (array)$list as $post ) :
            $detail     = $this->detail( $post->ID );
            $time_today = (int)strtotime( date( 'H:i:s' ) );
            $time_begin = (int)strtotime( date( $detail->livedraw_start.':00' ) );
            $time_close = (int)strtotime( date( $detail->livedraw_stop.':00' ) );

            if ( $time_today >= $time_begin && $time_today <= $time_close ) :
                wp_redirect( get_permalink( $detail->livedraw_page ) ); exit;
            endif;
        endforeach;
    }

    function render_prize( $prize, $class = null, $width = 20, $height = 20 ) {
        $list = 1;
        $show = ( $prize['is_live'] == true ) ? ' d-none' : '';
        $data = $prize['form'] . '-' . $prize['type'] . '-' . $prize['data'] . '-' . $prize['count'];
        $html = '';

        if ( $prize['is_live'] == true ) :
            $attr  = ( $width != null ? ' width="'.$width.'"' : '' ).( $height != null ? ' height="'.$height.'"' : '' );
            $html .= '<img id="loading-' . $data . '" src="' . $prize['gif'] . '"' . $attr . '>';
        endif;

        $html .= '<div id="' . $data . '" class="text-center prize-wrapper' . $show . '">';
        foreach ( str_split( $prize['digits'] ) as $digit ) :
            $numb  = ( $prize['is_live'] == true ) ? '-' : $digit;
            $html .= '<div class="prize-block d-inline-block' . ( $class == null ? '' : ' '.$class ) . '">';
            $html .= '    <div class="prize-digit">';
            $html .= '        <span id="' . $data . '-' . $list . '" data-parent="' . $data . '">' . $numb . '</span>';
            $html .= '    </div>';
            $html .= '</div>';
            $list++;
        endforeach;
        $html .= '</div>';
    
        echo $html;
    }

    function extract_prize( $post_type, $prize, $type = 'main', &$timing = 0, $display = 'per_digit', $divider = 10 ) {
        $data = []; $list = 0; $step = 1;

        foreach ( (array)$prize as $number ) :
            $odd = 0; $pos = 1;

            foreach ( str_split( $number['digits'] ) as $digit ) :
                $data[$list] = [
                    'id'     => '#livedraw-' . $post_type . '-' . $type . '-' . $step . '-' . $pos,
                    'timing' => ( $display == 'per_digit' ) ? ( $timing + $odd ) : $timing,
                    'number' => $digit,
                ];

                $odd += $divider;

                $pos++; $list++;
            endforeach;

            $timing += ($type == 'main') ? 200 : 100;

            $step++;
        endforeach;

        return $data;
    }

    function exito_data_api() {
        if ( isset( $_POST['exito_key'] ) && $_POST['exito_key'] == 'lottery' ) {
            echo json_encode( $this->post_data(), true );

            die();
        }
    }
}