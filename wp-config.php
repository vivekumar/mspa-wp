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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'handelstore');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'Admin@123');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '5bbW+.n~S|{c+&=kR#=*SE.D-KB/c$j|sl;2+XJgm?f5JOgf8/*Va@h--?S.@TAi');
define('SECURE_AUTH_KEY',  '+l:aM;sJb{{+ZzusG{QZKXAtJ;6x~|X_A^*LFf.U=j,?9##gy%=MRf0zV&uS+$Ot');
define('LOGGED_IN_KEY',    '5)[)U/6W<T<`T}YS*<:8@`bTO~9g1`2-MLto7oo-ml*QxotQ/|H4O-xm|-|P=3|5');
define('NONCE_KEY',        '9icUD+bF>y`PKUqgwIQSxR9u@D+xOg#$x+IpT!HwE#!e@eu<uAcQ/6i|59lkT4xK');
define('AUTH_SALT',        'rS?688Wy@9ctT]G0 {B^F;G+@&2LA?~v<jq&/rDIN/UI)+8iv(e.KI4B5YYa4h-W');
define('SECURE_AUTH_SALT', '*Zj39@v{K,nvd%oj7yh.ScjG?R;@/c*8:<|a_t&MyD%(/ Wq]cdF]b&aK/C$I1uh');
define('LOGGED_IN_SALT',   'i-sj+rd*b*mq3Svb`fhv t/GIa++-)&@eRLd8ln4R%}kh`z=f+C%5Ah293C-;[*V');
define('NONCE_SALT',       'lmVD0lF5$wB-qC*lIM1T;eY`0)iLj~x$I(S:JKu~IfD]&Ay6^~wet~A2WTKQ2D+,');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', false); // Or false
if (WP_DEBUG) {
	define('WP_DEBUG_LOG', true); // writes errors down in wp-content/debug.log
	define('WP_DEBUG_DISPLAY', true);
}
define('WPLANG', 'sv_SE');
/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
