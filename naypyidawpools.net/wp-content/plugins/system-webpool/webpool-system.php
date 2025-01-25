<?php
/*
 * Plugin Name: WebPool - System
 * Plugin URI:  https://www.exitobali.com/
 * Description: WebPool System for generate lottery website.
 * Version:     1.2.8
 * Author:      Exito Team
 * Author URI:  https://www.exitobali.com/
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: pool-system
 * Domain Path: /languages
 */

if( ! defined( 'ABSPATH' ) ) die( 'Invalid request.' );

global $pool;

define( 'POOL_PATH', plugin_dir_path( __FILE__ ) );

require_once POOL_PATH . 'includes/class-pool-generator.php';
require_once POOL_PATH . 'includes/class-pool-input.php';
require_once POOL_PATH . 'includes/class-pool-metabox.php';
require_once POOL_PATH . 'includes/class-pool-post.php';
require_once POOL_PATH . 'includes/class-pool-system.php';

$pool = new Pool_System();
