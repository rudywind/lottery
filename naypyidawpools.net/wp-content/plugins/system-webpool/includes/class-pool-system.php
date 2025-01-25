<?php

if( ! defined( 'ABSPATH' ) ) die( 'Invalid request.' );

class Pool_System extends Pool_Post {
    var $version    = '1.2.8';
    var $txtdomain  = 'pool-system';
    var $post_type  = 'pool-type';
    var $post_slug  = 'pool_type';
    var $post_title = 'Pool - Product';

    function __construct() {
        $this->define( 'EPS_URL',        plugin_dir_url( __DIR__ ) );
        $this->define( 'EPS_PATH',       plugin_dir_path( __DIR__ ) );
        $this->define( 'EPS_TYPE',       $this->post_type );
        $this->define( 'EPS_SLUG',       $this->post_slug );
        $this->define( 'EPS_NAME',       $this->post_title );
        $this->define( 'EPS_BASENAME',   plugin_basename( __DIR__ ) );
        $this->define( 'EPS_VERSION',    $this->version );
        $this->define( 'EPS_TEXTDOMAIN', $this->txtdomain );
        $this->define( 'EPS_MB_NAME',    'pool-setup' );
        $this->define( 'EPS_MB_TITLE',   'Pool Product Setup' );

        add_action( 'init',                          [ $this, 'init' ] );
        add_action( 'admin_enqueue_scripts',         [ $this, 'load_assets' ] );
        add_action( 'admin_head',                    [ $this, 'admin_head' ] );
        add_action( 'admin_menu',                    [ $this, 'admin_menu' ] );
        add_action( 'add_meta_boxes',                [ $this, 'add_meta_boxes' ] );
        add_action( 'wp_ajax_pool_livedraw',         [ $this, 'livedraw_ajax' ] );
        add_action( 'wp_ajax_nopriv_pool_livedraw',  [ $this, 'livedraw_ajax' ] );
        add_action( 'wp_ajax_exito_data_api',        [ $this, 'exito_data_api' ] );
        add_action( 'wp_ajax_nopriv_exito_data_api', [ $this, 'exito_data_api' ] );
    }

    function define( $name, $value = true ) {
		if( !defined($name) ) { define( $name, $value ); }
	}
    
    function init() {
        // register pool main post type
        $this->register_post_type( EPS_NAME, EPS_TYPE, 'dashicons-welcome-widgets-menus' );
        add_action( 'save_post', [ $this, 'save_post_pool_main' ] );
        add_action( 'manage_'.EPS_TYPE.'_posts_custom_column', [ $this, 'main_table_content' ], 10, 2 );
        add_filter( 'manage_'.EPS_TYPE.'_posts_columns',       [ $this, 'main_table_head' ] );

        // register pool product post type
        $this->register_product_post_type();

        // set pool livedraw page
        add_filter( 'display_post_states', [ $this, 'post_state' ], 10, 2 );
    }

    function register_product_post_type() {
        $post_type = new WP_Query([ 'post_type' => EPS_TYPE, 'post_status' => 'publish', 'posts_per_page' => -1 ]);

        if ($post_type->have_posts()) :
            while ($post_type->have_posts()) :
                $post_type->the_post();

                $slug  = get_post_field( 'post_name', get_post() );
                $label = get_the_title();

                $this->register_post_type( $label, $slug, 'dashicons-calendar-alt', 5 );
                add_action( 'save_post', [ $this, 'save_post_pool_product' ] );
                add_action( 'manage_'.$slug.'_posts_custom_column', [ $this, 'product_table_content' ], 10, 2 );
                add_filter( 'manage_'.$slug.'_posts_columns',       [ $this, 'product_table_head' ] );
            endwhile;
        endif;
    }

    function load_assets() {
        wp_enqueue_media();
        wp_register_style( 'pool-acf-input', EPS_URL . 'assets/css/acf-input.css' );
        wp_enqueue_style( 'pool-acf-input' );
        wp_register_script( 'pool-acf-input', EPS_URL . 'assets/js/pool-script.js' );
        wp_enqueue_script( 'pool-acf-input' );
    }

    function admin_head() {
        global $post_type;
        echo ($post_type == EPS_TYPE) ? "<style>#edit-slug-box, .handle-actions.hide-if-no-js {display:none;}</style>" : "";

        $list_post = get_posts([ 'post_type' => EPS_TYPE, 'numberposts' => -1 ]);

        foreach ($list_post as $data) :
            echo ($post_type == $data->post_name) ? "<style>#edit-slug-box, .handle-actions.hide-if-no-js {display:none;} .wp-list-table #title {width:250px;} .wp-list-table #drawno {width:100px;}</style>" : "";
        endforeach;
    }

    function admin_menu() {
        ob_start();
        
        $text = 'Pool - Post Generator';
        $link = 'edit.php?post_type='.EPS_TYPE;
        $slug = 'pool-generator';
        $tool = new Pool_Generator( $link, $slug, $text );

        add_submenu_page( $link, $text, $text, 'manage_options', $slug, [ $tool, 'render' ] );
    }
}
