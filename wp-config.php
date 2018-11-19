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
define('DB_NAME', 'feedballoon-cms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'root');
define('DB_PASSWORD', 'flying2018!');

/** MySQL hostname */
define('DB_HOST', '18.209.101.158');

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
define('AUTH_KEY',         ']I;4G{c[;/d>7weCfqZ?5x*9o:+-_8lP>{va3xQAdp^Lm<#H^>#a &:m3[%Xhif#');
define('SECURE_AUTH_KEY',  'W!`Pd%Ig7,g?0p,q@^qNeU=i/2dK_+K 4W3NPD6O]H[1zsx#.i&xcr,g~^!4twXL');
define('LOGGED_IN_KEY',    '5,R>PoI}F8U!X;&eJZ9?m=zPF{ MGB)Ix91FvMNAw;6ZEfWMG&kdC-t 1%;(?th8');
define('NONCE_KEY',        'S>ql5B+6cqr}bC@TH)qiDRfTO WpA:1rCiaa(wQpl<mqc=VJ-:IR1,^_4>K!z^m{');
define('AUTH_SALT',        'uQ,%.x2q#!-AK;#`z9(8GeFo94IOB4Y>,Oz88Bxy^TK7+m7n^6Frcl;E482sLxQ/');
define('SECURE_AUTH_SALT', '3q{1xHbHttZ{V#ujCr:RMTJu#8J(<k0j9&WrH6L(n-+b=&%n*pyzh>6W4|<wWO|q');
define('LOGGED_IN_SALT',   '#gRN6Ud5dD-qd7J >lUW}2Xuh{!W.NsAb@MZIn-[I4`p)cUw2tK^:GD*H9u_*B;g');
define('NONCE_SALT',       'wBNR~?>7Z(C(UzXtEab[QbG!+ybNKT]4[Wh{3ZCx8Uh|<,+<FbXeO]Ec4@Gx_B3q');

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
