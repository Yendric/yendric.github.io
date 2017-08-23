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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'I6?xwlV_>Koc Wt&* Spl6alb3Q9Ny(5-W}x ;b,g^(_<Z}^a($}}c8fy:C.EV/u');
define('SECURE_AUTH_KEY',  ',q`LG5 m1QA~t>@M 4>J2Y/=IE]MxP!?y80!F#Xm@~t%dE~oz=fpUIMqzw[4+YK[');
define('LOGGED_IN_KEY',    'U8DIqM97-s5UX/`oLJ#9t]B]4ddG]|>Z+!kx@@;|z1DH&{NTjy{%$ajcTF|l#@9Q');
define('NONCE_KEY',        'UdDGmv|)xil[=A;9iX^M|.]O4xYzF=:lCk|J:{7l-T{gK#ll#rZQ$18?5xMAh6oA');
define('AUTH_SALT',        'c`;;o;+[g3pg=n}sK6ze^ TER`aWY9yIk}cIJVkp?b^SEE,pi|d<DGON?#I6%shp');
define('SECURE_AUTH_SALT', '&HWFG %FeL.0+zQIkG#>q Af[EfU-HS4@Rf]T|to?TJi**<x?QNU[x4|%TsZnN<l');
define('LOGGED_IN_SALT',   'lvc?7VLiC)cp:+u$o1K^MKFGlt=,mfBr& %Jut}:Q+|O6NT`KyT=]c{jN]e~2Vrk');
define('NONCE_SALT',       '=l1AH,p5;zd_EY.E#%Lu<J1Alf_Vs.g` _v10nQG4~@Tsmm`$)^mKv*B~i#z, ^r');

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
