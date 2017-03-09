<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blogpoems');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FS6]Z)uOlBEQQB=]vK=ni4Na1n39BH</:6!gobbbU[@bI0`P.B.H|? |D]kxa_# ');
define('SECURE_AUTH_KEY',  'V$y] N1i==%#3 =Ksqt8`%25qEm#y)H;i5b*B?B!{[W>/nTaH.&ERj@80s^5bS7,');
define('LOGGED_IN_KEY',    '~?RuB|xVuXPx4bk}O*& +1JvML,{bZG#)XgW%Zv`SZ>@_`&uVO:)bGs($zV<]c;U');
define('NONCE_KEY',        '(SaFsDxq<qO1$3=d0H3l,(C>tQ^mAHQ-wXzE{uN={<>u{8EMOQz(2j(Tl@%N.m[h');
define('AUTH_SALT',        'V`f>:3P*djT4DvM(j(5kb]<34]x2!wcAaZ9rXWXta5Fd-|0xAk@nuQ9erf2k-XO&');
define('SECURE_AUTH_SALT', ']a*VTu%)dy`.F*On/r8k1awd[DCgN1nx5Em+b$08?=,HM ,4&GQyZ#}^v[:@@tX_');
define('LOGGED_IN_SALT',   'C}Ob<=i2MW8 )I+B|{?kbW{(u4oUY/@@6EjCX0u3 >PYnNp>cKvLNYhOT`$5Y88w');
define('NONCE_SALT',       '`S U=-=YhI{Gl^ZWUqJP Xh$Z6|$xb6rZ$m+4@@BsrnVTh6?Iittf}DAO8O=X``_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
