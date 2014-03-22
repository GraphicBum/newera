<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


define('WP_HOME','http://specie-french.codio.io:3000/wordpress');
define('WP_SITEURL','http://specie-french.codio.io:3000/wordpress');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f5Yl&8q]]^gyPEiaGmO)?/b+-^W/=H-4*[XM+!,:]fjhLmUp.cb`j#-p]c-|`_`%');
define('SECURE_AUTH_KEY',  'z&j_}e1suQbRWJjQF!wc,F.+5F]!G:ChLi+D%8 8jyM4g*bXSUijqFB62lb,qy3y');
define('LOGGED_IN_KEY',    'V)|Q<^kda8heM%K!?XQ/,B^ft+JO9W@c_F} &W6JgxU0<;qCW_uN%SNQB-MJdPg5');
define('NONCE_KEY',        'KAr|02veWgA.`zn!yD5(NKZ(]_IGzUCoX*H9V8jnA9kz@+<XgC)8+{o Oo4|bM3B');
define('AUTH_SALT',        '|-{hz!hO!+_3|-5F]--X:V+Qi-h0CJXyiQ*+_n])mN]FR29%TwfB2?a8z%)btK&<');
define('SECURE_AUTH_SALT', '/YuB($][Ud**R1&BQGI5u}_Y_2M$G#(MMj4n^=@_b|Y{|}8yNZB90CVElO^&5#P5');
define('LOGGED_IN_SALT',   '8{^Y/9qZmAi,Y}4h#2NG*:_}]-ceOCw7z[4Oq(&gGzZH*0)SM;A1G)Tt6L|P-2jZ');
define('NONCE_SALT',       ',E1RHezD,| l^oN|8X*:6f:G_kQ+km[0fs=zBkvc~3S1N1BohW?9$;zX]hJ5nN0H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
