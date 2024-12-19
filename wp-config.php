<?php
define('WP_CACHE', true); // Added by WP Rocket

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
define('DB_NAME', 'itheavic_newdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '(C80gLC^Mq=qJX~p5QT`Y6fH,WGPT  XRz5=i5eX wV(RJ}TD]oz5oZce<9k%eW(');
define('SECURE_AUTH_KEY', '$%1d.e;Ep.F*O-1pgS3(3X.Gcf{OH_qRiHha/W35^G;9:e5X;zjQelgAkWm(?$j?');
define('LOGGED_IN_KEY', '&G*!sKs4=m1+:)E2=%:_}su.A}l(APQ~({,hV/tI^M9P{YY=]4V]|?r~q@F?&ECJ');
define('NONCE_KEY', '_.$B1f;9DZ^G|p{K[Ou-YshIa=Oo,s|::^B+J<B+T--^dP8YYlnx&Z4Dh:<Pw]e7');
define('AUTH_SALT', 'yZoJ-{;n-M7qN6;(Ar&(VJ[W*EurAI.70larsR1@)g2S>x^1SY31(=li4&eKwTcG');
define('SECURE_AUTH_SALT', 'f@9|ZQ0(mK!HZQ@Z{8qjHG]L6#[IkOf%c;MBSQfYmbS6nQp3$q[z3huD4%kSd0GV');
define('LOGGED_IN_SALT', '724x~cc4KZ}|I=Y_5/`@ETun]&&n22;Xhs5v(iyUI)|H|=;-6U}Qf^I|g{nUW+@a');
define('NONCE_SALT', '&Wjg_,Xp*BGJdJFwYTbe5fN4!hCwz0)iX+_fz7/t#B(H$vViIdP5-3H$oN~apQ+!');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('EWWW_IMAGE_OPTIMIZER_SCAN_MODE_B', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');