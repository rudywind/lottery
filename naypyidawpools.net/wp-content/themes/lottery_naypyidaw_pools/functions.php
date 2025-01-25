<?php
/**
 * @package lottery
 * @since 1.0.0
 */

function copyright() {
    $html  = __( 'Copyright', 'lottery' ) . ' &copy; ' . get_theme_mod( 'web_copyright' ) . ' <b>' . get_bloginfo( 'name' );
    $html .= '</b>, ' . __( 'All rights reserved', 'lottery' ) . '.';
    
    return $html;
}

function lottery_product_list() {
    return [ 'pool_day' => 'Lottery - Pool Day' ];
}
add_filter( 'product_list', 'lottery_product_list' );
