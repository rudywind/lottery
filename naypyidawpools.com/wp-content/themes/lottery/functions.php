<?php
/**
 * @package lottery
 * @since 1.0.0
 */

date_default_timezone_set( get_option( 'timezone_string' ) );

require_once get_template_directory() . '/includes/funcs-hooks.php';
require_once get_template_directory() . '/includes/class-customize.php';
require_once get_template_directory() . '/includes/class-navwalker.php';
require_once get_template_directory() . '/includes/class-theme.php';

function check_live() {
    if ( class_exists('Pool_System') ) { global $pool; $pool->check_live(); }
    if ( class_exists('Toto_System') ) { global $toto; $toto->check_live(); }
}

global $elt;
$elt = new Exito_Theme();
$elt->initialize();
