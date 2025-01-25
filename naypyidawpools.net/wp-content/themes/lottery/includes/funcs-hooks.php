<?php
/**
 * @package lottery
 * @since 1.0.0
 */

function lang( $text ) {
    echo __( $text, 'lottery' );
}

function elt_date( $format = 'd F Y', $date = null ) {
    return date_i18n( $format, strtotime( $date ) . '+1days' );
}

function elt_header() {
    return apply_filters( 'elt_header', null );
}

function elt_footer() {
    return apply_filters( 'elt_footer', null );
}

function elt_logo( $width = null, $height = null ) {
    return apply_filters( 'elt_logo', $width, $height );
}

function elt_icon( $width = null, $height = null ) {
    return apply_filters( 'elt_icon', $width, $height );
}

function elt_copyright() {
    return apply_filters( 'elt_copyright', null );
}

function elt_component( $file, $data = null, $draw = null ) {
    return apply_filters( 'elt_component', $file, $data, $draw );
}

function elt_data( $type ) {
    return apply_filters( 'elt_data', $type );
}

function elt_paged() {
    if ( get_query_var( 'paged' ) ) :
        return get_query_var( 'paged' );
    elseif ( get_query_var( 'page' ) ) :
        return get_query_var( 'page' );
    else :
        return '1';
    endif;
}
