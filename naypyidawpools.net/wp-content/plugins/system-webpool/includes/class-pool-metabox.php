<?php

if( ! defined( 'ABSPATH' ) ) die( 'Invalid request.' );

class Pool_Metabox {
    function __construct() {}

    function add_metabox_classes( $classes ) {
        array_push( $classes, 'acf-postbox' );
        return $classes;
    }

    function add_meta_boxes() {
        add_meta_box( EPS_MB_NAME, EPS_MB_TITLE, [ $this, 'callback_metabox_main' ], EPS_TYPE, 'normal', 'high' );
        add_filter( 'postbox_classes_'.EPS_TYPE.'_'.EPS_MB_NAME, [ $this, 'add_metabox_classes' ] );

        foreach (get_posts([ 'post_type' => EPS_TYPE, 'numberposts' => -1 ]) as $post) :
            $name = $post->post_name;

            add_meta_box( 'draw-id', 'Pool Draw Number', [ $this, 'callback_metabox_draw_id' ], $name, 'normal', 'high', $post );
            add_filter( 'postbox_classes_'.$name.'_draw-id', [ $this, 'add_metabox_classes' ] );

            add_meta_box( 'main-prize', 'Lottery Main Prize', [ $this, 'callback_metabox_main_prize' ], $name, 'normal', 'high', $post );
            add_filter( 'postbox_classes_'.$name.'_main-prize', [ $this, 'add_metabox_classes' ] );

            add_meta_box( 'starter-prize', 'Lottery Starter Prize', [ $this, 'callback_metabox_starter_prize' ], $name, 'normal', 'high', $post );
            add_filter( 'postbox_classes_'.$name.'_starter-prize', [ $this, 'add_metabox_classes' ] );

            add_meta_box( 'consolation-prize', 'Lottery Consolation Prize', [ $this, 'callback_metabox_consolation_prize' ], $name, 'normal', 'high', $post );
            add_filter( 'postbox_classes_'.$name.'_consolation-prize', [ $this, 'add_metabox_classes' ] );
        endforeach;
    }

    function callback_metabox_main( $post ) {
        $input = new Pool_Input( $post->ID, EPS_TYPE );

        // Livedraw Time
        $input->setup_livedraw_time();
        // Livedraw Page
        $input->setup_livedraw_page();
        // Livedraw Type
        $input->setup_livedraw_type();
        // Livedraw GIF loading
        $input->setup_livedraw_gif();
        // Draw Number
        $input->setup_draw_no();
        // Prize Digit Number
        $input->setup_max_digit();
        // Total Prize Main
        $input->setup_max_prize( 'main' );
        // Total Prize Starter
        $input->setup_max_prize( 'starter' );
        // Total Prize Consolation
        $input->setup_max_prize( 'consolation' );
        // Export Detail ID
        $input->setup_export_detail( 'id' );
        // Export Detail Code
        $input->setup_export_detail( 'code' );
        // Export Detail Name
        $input->setup_export_detail( 'name' );
    }

    function callback_metabox_draw_id( $post, $args ) {
        $input = new Pool_Input( $post->ID, $post->post_type, 'draw-id' );

        // Pool Type ID
        $input->field_pool_id( $args['args']->ID );
        // Draw Number
        $input->field_draw_id( $this->latest_draw_number( $post->post_type ) );
        // Button Auto Generate Number
        $input->field_auto_number();
    }

    function callback_metabox_main_prize( $post, $args ) {
        $data  = $this->detail( $args['args']->ID );
        $input = new Pool_Input( $post->ID, $post->post_type, 'main-prize' );

        // Main Prize Number
        for ( $no = 1; $no <= $data->total_prize_main; $no++ ) {
            $input->field_prize_number( $no, 'main', $data->max_digit );
        }
    }

    function callback_metabox_starter_prize( $post, $args ) {
        $data  = $this->detail( $args['args']->ID );
        $input = new Pool_Input( $post->ID, $post->post_type, 'starter-prize' );

        // Starter Prize Number
        for ( $no = 1; $no <= $data->total_prize_starter; $no++ ) {
            $input->field_prize_number( $no, 'starter', $data->max_digit );
        }
    }

    function callback_metabox_consolation_prize( $post, $args ) {
        $data  = $this->detail( $args['args']->ID );
        $input = new Pool_Input( $post->ID, $post->post_type, 'consolation-prize' );

        // Consolation Prize Number
        for ( $no = 1; $no <= $data->total_prize_consolation; $no++ ) {
            $input->field_prize_number( $no, 'consolation', $data->max_digit );
        }
    }

    function save_post_pool_main( $post_id ) {
        if ( isset( $_POST[EPS_SLUG.'_livedraw_start'] ) ) {
            update_post_meta( $post_id, EPS_SLUG.'_livedraw_start',    $_POST[EPS_SLUG.'_livedraw_start'] );
            update_post_meta( $post_id, EPS_SLUG.'_livedraw_stop',     $_POST[EPS_SLUG.'_livedraw_stop'] );
            update_post_meta( $post_id, EPS_SLUG.'_livedraw_page',     $_POST[EPS_SLUG.'_livedraw_page'] );
            update_post_meta( $post_id, EPS_SLUG.'_livedraw_type',     $_POST[EPS_SLUG.'_livedraw_type'] );
            update_post_meta( $post_id, EPS_SLUG.'_livedraw_gif',      $_POST[EPS_SLUG.'_livedraw_gif'] );
            update_post_meta( $post_id, EPS_SLUG.'_draw_no',           $_POST[EPS_SLUG.'_draw_no'] );
            update_post_meta( $post_id, EPS_SLUG.'_max_digit',         $_POST[EPS_SLUG.'_max_digit'] );
            update_post_meta( $post_id, EPS_SLUG.'_prize_main',        $_POST[EPS_SLUG.'_prize_main'] );
            update_post_meta( $post_id, EPS_SLUG.'_prize_starter',     $_POST[EPS_SLUG.'_prize_starter'] );
            update_post_meta( $post_id, EPS_SLUG.'_prize_consolation', $_POST[EPS_SLUG.'_prize_consolation'] );
            update_post_meta( $post_id, EPS_SLUG.'_export_id',         $_POST[EPS_SLUG.'_export_id'] );
            update_post_meta( $post_id, EPS_SLUG.'_export_code',       $_POST[EPS_SLUG.'_export_code'] );
            update_post_meta( $post_id, EPS_SLUG.'_export_name',       $_POST[EPS_SLUG.'_export_name'] );
        }
    }

    function save_post_pool_product( $post_id ) {
        $slug = str_replace( '-', '_', get_post_field( 'post_type', $post_id ) );

        if ( isset( $_POST['pool_type_id'] ) ) {
            $id   = $_POST['pool_type_id'];
            $prz1 = get_post_meta( $id, 'pool_type_prize_main', true );
            $prz2 = get_post_meta( $id, 'pool_type_prize_starter', true );
            $prz3 = get_post_meta( $id, 'pool_type_prize_consolation', true );

            update_post_meta( $post_id, $slug.'_draw_id', $_POST[$slug.'_draw_id'] );

            for ( $pm = 1; $pm <= (int)$prz1; $pm++ ) {
                update_post_meta( $post_id, $slug.'_prize_main_'.$pm, $_POST[$slug.'_prize_main_'.$pm] );
            }
            for ( $ps = 1; $ps <= (int)$prz2; $ps++ ) {
                update_post_meta( $post_id, $slug.'_prize_starter_'.$ps, $_POST[$slug.'_prize_starter_'.$ps] );
            }
            for ( $pc = 1; $pc <= (int)$prz3; $pc++ ) {
                update_post_meta( $post_id, $slug.'_prize_consolation_'.$pc, $_POST[$slug.'_prize_consolation_'.$pc] );
            }
        }
    }

    function main_table_head( $columns ) {
        $output = [];

        foreach ( $columns as $key => $val ) {
            if ( $key == 'date' ) {
                $output['livedraw_start'] = 'Livedraw Start at';
                $output['livedraw_stop']  = 'Livedraw Stop at';
                $output['author']         = 'Author';
                $output['date']           = 'Created at';
            }
            $output[$key] = $val;
        }

        return $output;
    }

    function main_table_content( $column_name, $post_id ) {
        if ($column_name == 'livedraw_start') {
            echo date('h:i A', strtotime(get_post_meta($post_id, EPS_SLUG.'_livedraw_start', true)));
        }
        if ($column_name == 'livedraw_stop') {
            echo date('h:i A', strtotime(get_post_meta($post_id, EPS_SLUG.'_livedraw_stop', true)));
        }
    }

    function product_table_head( $columns ) {
        $output = [];

        foreach ( $columns as $key => $val ) {
            if ( $key == 'date' ) {
                $output['drawno']    = 'Draw No.';
                $output['1st_prize'] = '1st Prize';
                $output['2nd_prize'] = '2nd Prize';
                $output['3rd_prize'] = '3rd Prize';
                $output['author']    = 'Author';
            }
            $output[$key] = $val;
        }

        return $output;
    }

    function product_table_content( $column_name, $post_id ) {
        $slug = str_replace( '-', '_', get_post_field( 'post_type', $post_id ) );

        if ($column_name == 'drawno') {
            echo '<h3 style="margin:0;">#'.get_post_meta($post_id, $slug.'_draw_id', true).'</h3>';
        }
        if ($column_name == '1st_prize') {
            echo '<h1 style="margin:0;padding:0;font-weight:bold;color:#ff4700;">'.get_post_meta($post_id, $slug.'_prize_main_1', true).'</h1>';
        }
        if ($column_name == '2nd_prize') {
            echo '<h1 style="margin:0;padding:0;font-weight:bold;color:#9a9a9a;">'.get_post_meta($post_id, $slug.'_prize_main_2', true).'</h1>';
        }
        if ($column_name == '3rd_prize') {
            echo '<h1 style="margin:0;padding:0;font-weight:bold;color:#9a9a9a;">'.get_post_meta($post_id, $slug.'_prize_main_3', true).'</h1>';
        }
    }
}