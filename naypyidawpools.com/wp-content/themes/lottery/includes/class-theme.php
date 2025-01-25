<?php
/**
 * @package lottery
 * @since 1.0.0
 */

class Exito_Theme {
    function __construct() {}

    function initialize() {
        // add actions
        add_action( 'after_setup_theme',  [ $this, 'theme_setup' ] );
        add_action( 'widgets_init',       [ $this, 'register_widget_areas' ] );
        add_action( 'customize_register', [ $this, 'theme_customizer' ] );

        // add filters
        add_filter( 'nav_menu_css_class',             [ $this, 'nav_class' ], 10, 2 );
        add_filter( 'the_tags',                       [ $this, 'add_class_the_tags' ], 10, 1 );
        add_filter( 'excerpt_length',                 [ $this, 'excerpt_length_limits' ] );
        add_filter( 'next_posts_link_attributes',     [ $this, 'posts_link_attributes' ] );
        add_filter( 'previous_posts_link_attributes', [ $this, 'posts_link_attributes' ] );
        add_filter( 'elt_header',                     [ $this, 'header' ], 10, 0 );
        add_filter( 'elt_footer',                     [ $this, 'footer' ], 10, 0 );
        add_filter( 'elt_logo',                       [ $this, 'logo' ], 10, 2 );
        add_filter( 'elt_icon',                       [ $this, 'icon' ], 10, 2 );
        add_filter( 'elt_component',                  [ $this, 'component' ], 10, 3 );
        add_filter( 'elt_data',                       [ $this, 'data' ], 10, 1 );
    }

    function theme_setup() {
        global $data;
        
        add_theme_support( 'custom-logo' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
    
        load_theme_textdomain( 'lottery' );

        register_nav_menus([ 'primary' => 'Menu Primary', 'secondary' => 'Menu Secondary', 'feature' => 'Menu Feature' ]);

        $products = apply_filters( 'product_list', null );
        foreach ( (array)$products as $key => $val ) :
            $data[$key] = elt_data( get_theme_mod( $key ) );
        endforeach;
    }

    function theme_customizer( $wp_customize ) {
        $wp_customize->add_section( 'lottery_section', [
            'title'      => __( 'Lottery Settings', 'lottery' ),
            'priority'   => 10,
            'capability' => 'edit_theme_options',
        ] );

        // Website Copyright
        $wp_customize->add_setting( 'web_copyright', [ 'default' => date( 'Y' ) ] );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'web_copyright', [
            'id'      => 'web_copyright',
            'label'   => __( 'Website Copyright', 'lottery' ),
            'section' => 'lottery_section',
            'type'    => 'text',
        ] ) );

        // Register Lottery Product
        $products = apply_filters( 'product_list', null );
        foreach ( (array)$products as $key => $val ) :
            $wp_customize->add_setting( $key, [ 'default' => '' ] );
            $wp_customize->add_control( new Lottery_Customize( $wp_customize, $key, [
                'id'      => $key,
                'label'   => $val,
                'section' => 'lottery_section'
            ] ) );
        endforeach;
    }

    function register_widget_areas() {
        register_sidebar([
            'name'          => 'Website Banner',
            'id'            => 'website_banner',
            'description'   => 'List of website banner',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ]);
    }

    function nav_class( $classes, $item ) {
        if ( in_array( 'current-menu-item', $classes ) ) { $classes[] = 'active '; }
    
        return $classes;
    }

    function add_class_the_tags( $html ){
        $postid = get_the_ID();
        $html   = str_replace('<a', '<a class="badge badge-dark"', $html);

        return $html;
    }
    
    function excerpt_length_limits( $length ) {
        return 40;
    }

    function posts_link_attributes() {
        return 'class="btn btn-secondary btn-history"';
    }

    function header() {
        $path = TEMPLATEPATH  . '/header.php';
        if ( file_exists( $path ) ) { require_once $path; }
    }

    function footer() {
        $path = TEMPLATEPATH  . '/footer.php';
        if ( file_exists( $path ) ) { require_once $path; }
    }

    function component( $file, $data = null, $draw = null ) {
        $path = STYLESHEETPATH  . '/components/part-' . $file . '.php';
        
        if ( file_exists( $path ) ) {
            if ( $data != null ) { $draw = ( $data->is_live == true ) ? $data->livedraw : $data->lastdraw; }
            require_once $path;
        }
    }

    function image( $type = 'logo', $width = null, $height = null, $link = null ) {
        $attr = ( ( $width != null ) ? ' width="' . $width . '"' : '' ).( ( $height != null ) ? ' height="' . $height . '"' : '' );
        $html = '<img class="web-' . $type . '" src="' . $link . '"' . $attr . '>';
    
        return $html;
    }

    function logo( $width = null, $height = null ) {
        return $this->image( 'logo', $width, $height, wp_get_attachment_url( get_theme_mod( 'custom_logo' ), 'full' ) );
    }

    function icon( $width = null, $height = null ) {
        return $this->image( 'icon', $width, $height, get_site_icon_url() );
    }

    function load_data( $type ) {
        $data = [];

        if ( class_exists('Pool_System') ) :
            global $pool;
            foreach ( (array)$pool->post_data() as $key => $val ) { $data[$key] = $val; }
        endif;
        if ( class_exists('Toto_System') ) :
            global $toto;
            foreach ( (array)$toto->post_data() as $key => $val ) { $data[$key] = $val; }
        endif;

        return $data[ $type ];
    }

    function data( $type ) {
        return $this->load_data( $type );
    }
}
