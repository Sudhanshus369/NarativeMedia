<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'NarativeMedia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'U%Ph@>fz 1ui>sMov32`Y#6?yrd1`]WTdT@meB=sq9=:f)bP$7T3q.OOJNArzZ<4' );
define( 'SECURE_AUTH_KEY',  'HzJ=MNgoc^RDe6(TXCy#!Jtw>/*oF?{h%X!Zxw?Llxj%N #KOk3f$$R?~xnsTlgj' );
define( 'LOGGED_IN_KEY',    '5=x&D2m.5ZT/bakh)W,fk^/v#wmq<;Y*pKxa#FsI$ib|GWV~E35ZKMyiwUrG`^3*' );
define( 'NONCE_KEY',        'o+EIu:O8_+QI^4uTcGXr*8hRDQTK<*&uSo$#8HE4XR|WCb``qu$Mk--GvyMT<EXG' );
define( 'AUTH_SALT',        'w^L@NyGASoP~EJlh{#f{LVynMFsuYxQunlA]zE_ Y,YfP=/z5]uYw:Lw-h+9,efk' );
define( 'SECURE_AUTH_SALT', 'f##*mB<[Ks*2!OuH6CGbbw,~]YZ~iN_rRM&Ei)QD {)[uZy^PtwdwFU|^3b<[P*P' );
define( 'LOGGED_IN_SALT',   'j,C=K)/0Fd@AB<h-oy?S%<UdNCl1=d}0<!lwvww7f&V#H5OM/e!{ijEZ-8|M?png' );
define( 'NONCE_SALT',       '~^AX}?9%.ITX>ZyYuM6Nm56!X$VQYk9-S+Ur|%N{N N?nTOI)lf;JP/x3P`Y_*BC' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
