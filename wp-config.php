<?php

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mzmgzapj_coders' );

/** Database username */
define( 'DB_USER', 'mzmgzapj_coders' );

/** Database password */
define( 'DB_PASSWORD', 'xH6tq2*%P8' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dd6<3ySK0:&-EJ(67db46n,A5e49cgiTu.^H:8S!V)Uki :zzHE>LSM5RyWE5nr!' );
define( 'SECURE_AUTH_KEY',  '`$dh@*h]U&wZ3p&q]s ~YldEO_3JS9V>bK .^3H^<p#![Z@:h2Yc!~#Z$O5K=KT^' );
define( 'LOGGED_IN_KEY',    'BuWBR^PEMfwE79@DQf:=Dj,lj9pN8pDt_I@dfwKh)4`oGehT_JG7Xgv^N-JK77uD' );
define( 'NONCE_KEY',        ':z<LgeShZ@bB+Z{KXFJDv:Z4J6$K5xnkOs.M8 @s*{,{_pcYQJ@|!#J<|*st-:S8' );
define( 'AUTH_SALT',        '5X58$?z`RX4Tz0Xcq<(@QYF,{N*M*PR3v-]G>hI8XfLmZCcQM2HhSE?7pSYFz$cC' );
define( 'SECURE_AUTH_SALT', '`u~`^%lseE0z1-hZq@i{Mi`50M2Z_8aiAJ2A<G6#R5u=^7(E6EP~AdcFt(fle?Jt' );
define( 'LOGGED_IN_SALT',   '`~`u8Wn>AJ9FN=:etkj#d(EhJV/);oeI2&Qf1Wfzt)=v/i_5%f32%D_G({?>Ty]O' );
define( 'NONCE_SALT',       ':_&;j QK^m|86u1c6Tj[ch69Vdp2leV@^J}`V[!xQ`0>qp;xru:GP:Y/`1&wC_GM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'en_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

//Enable error logging.
@ini_set('log_errors', 'On');
@ini_set('error_log', '/home/mzmgzapj/public_html/wp-content/elm-error-logs/php-errors.log');

//Don't show errors to site visitors.
@ini_set('display_errors', 'Off');
if ( !defined('WP_DEBUG_DISPLAY') ) {
	define('WP_DEBUG_DISPLAY', false);
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
