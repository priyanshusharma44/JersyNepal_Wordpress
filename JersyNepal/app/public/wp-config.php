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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'M32G7`=CWQ27},cq!+r2nETgC+UdnjZm< NL>4&Zi#zy> QF}r:NxZ6N,%P1+%/a' );
define( 'SECURE_AUTH_KEY',   '[yRUlL[<%(cL=K}[Q%zYbzkYQ; !qt(i>hVd{|}s;.E_~CuA}k|-(8-iX&Ed(;!%' );
define( 'LOGGED_IN_KEY',     '+j!*McqD?iwC<=VV29ku:o#&|I7Xn&sb;VEy@fi(]Fo|~e:kj: [~zofl)`#8IhU' );
define( 'NONCE_KEY',         'tLt?t!E1hqB7^T<eZSR^b^Hk:lonAGV`jP7=04%:,YWmT~0d0}8k.v@PCu>/E$$!' );
define( 'AUTH_SALT',         'jr;>SG+WbTm`+qQh^v>f`R~HK.0mt^Ya{uDY[RT!_{,AI)U^Hs6e3-rCnqemg|~{' );
define( 'SECURE_AUTH_SALT',  'P w/M;)5bSY<.z8kXRW&Z>/WP3;1hgg_Dn]nt YI,7-mJdS-}kgRdj_A&4.1t{Kz' );
define( 'LOGGED_IN_SALT',    'fI;`}`xY[32WY{AnnN5 i]{q6akk?@BTytQw~Y0=W]D Y^(6SqDL<7sF:;C&`//I' );
define( 'NONCE_SALT',        '9XMGb|<,M&&2i^o`f!mz]p.~*l,M%GZZ{xXtR&W]ZkU41 z[qw~P?/3G+]3[zEp_' );
define( 'WP_CACHE_KEY_SALT', 'AA|phBK~iUB*%Xo]WS3gU=#Cfj^zfae!R:76e9yTPl],*Nls>W8>9BQUS^m/0D j' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
