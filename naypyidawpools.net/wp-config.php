<?php
define( 'WP_CACHE', true );



















































































/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'allavzqw_wp654' );

/** Database username */
define( 'DB_USER', 'allavzqw_wp654' );

/** Database password */
define( 'DB_PASSWORD', '8fW5GOS!-@p5(P!R' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7mwkhnmsouzckh6fyshuviy3dozgimei6waju9brcpaaqyhjcngnfnzdspzrxls5' );
define( 'SECURE_AUTH_KEY',  'jpctbt45jb2wrwje5shnva2lnuxgsoqsldcvoeatj2nhdmgg2d31c8tc3tuvmrcp' );
define( 'LOGGED_IN_KEY',    'unalhxhnph2pockadvdxfesrawcpnrqbc8ewidhz9lkwyers0kwlve8abi6ascak' );
define( 'NONCE_KEY',        'xdmcdozrujbhqinropgggpamhh2qr1ercu0h741hzmeripqwpjwvqfguos0cpvpx' );
define( 'AUTH_SALT',        '3w2crfdbmxbq3et3mwsfubk3qkfpfsfn3awrlwroc4u0kirkcmz4gpn5tmghzwru' );
define( 'SECURE_AUTH_SALT', 'vy8w86k2cjmg6zrnyikzw4pyo1dvxwoqloig5yzqmqymy6pakxdhwojhe64vudcr' );
define( 'LOGGED_IN_SALT',   'sihklyalfwanlvdenkir35to5qppmjepgsqkm9u83zlfxkfln9idkofcsuqsmcva' );
define( 'NONCE_SALT',       'kisjuewozxzmjlnophfofyaz4kmsm4wxqas8ew5h5l1i0ywyucrxkemgje9xnftz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp63_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
