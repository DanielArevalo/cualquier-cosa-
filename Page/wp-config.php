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
define('DB_NAME', 'testing');

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
define('AUTH_KEY',         'Ie^t;+*7R9l^8q.WuVQfwE=O7o >9a}f``QXG{WfKc%]k^]hXpWe(1=r&k!iM{o]');
define('SECURE_AUTH_KEY',  '{ hYI7<xFaI8G$*K<Q*Hpjj4wm5W+6<nIaY=*L/hD|!pX[HI;(M2R5+HN.gmb`U3');
define('LOGGED_IN_KEY',    'R3)2!E)?DgiuGAn|)m+A&,L0[|#_OkN?TKTWT5FG>aC)X8D/zl*kl3%wM5O4.8b4');
define('NONCE_KEY',        '3[MNze~#wbsE0/z/wMb_jiDa#vKHe3hZ#Ut:k;le:$!-|lirN3)KJYy>PZM%XBAo');
define('AUTH_SALT',        'm|ZtJjX1jKcg]FF9c4~#_/uQy:4Xc->D;BU:w|*;W-RZq?pfg7c =DL`y[2J2Y)Z');
define('SECURE_AUTH_SALT', '{bR{37u@i]Frz_ekZyKg+0-)|Kwp^lYQ<>R}s>Jc8B978NVd^l&%O]OC}G%Lm!>s');
define('LOGGED_IN_SALT',   'M]8bNRl$`/[D!&]$vhc8elmM$wR8;{,Tx5qHXYx:~qC Lt T=8]XEHRZrO(:oq@b');
define('NONCE_SALT',       '`SHr9 !lZ$Si/?xAPKofz@K^/]Cu3s?tmFB/VF6d3-GEn&C8D2lf7-.]2H^eWB$E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pg_';

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
