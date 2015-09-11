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
define('DB_NAME', 'trex_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

// define('DB_NAME', 'trex_db');

// /** MySQL database username */
// define('DB_USER', 'trex_mark');

// /** MySQL database password */
// define('DB_PASSWORD', '^]Tku,QOg[P0');

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
define('AUTH_KEY',         '~k=[`T,C-;hww7whW*58iA`J!^w$I7_%K_4~f*a288)`>H^ dd|G+ajl>-Kb}L?l');
define('SECURE_AUTH_KEY',  'Pzk[/zRk7IR0n_ Dt*z<K9C-xo&AYo$qtDvuxBtFh1*jl|B,Dx?7|LObix~s9U>,');
define('LOGGED_IN_KEY',    '+^_Z9|7MN;k}(p|R8j&p>*):G>fMHIy7;pBs8rxvEh0_ts~K-%@;O&tf.7b9`8Zb');
define('NONCE_KEY',        'ctoFAstnr~e11Jyb.Hs +,831?^99c~1d;n`=gIGMBhS9u>|c,|_S~k9dC9,v3l]');
define('AUTH_SALT',        'tL@R(n;7}c*f;$/JSi/_53F/ShctE7>ggX#>{b+.s~2D|skDIb06qhC@|==GKC r');
define('SECURE_AUTH_SALT', 'h?P&CN..-dwZ?|u:QVrpL?:X:h!/ {=*Q7OrL;x4-JH6h7-vA0(IStE1d!6+Wr|m');
define('LOGGED_IN_SALT',   ':cw7:e,v+oBk4eiY8W<1/<lSjmbLw KF&Ol2s3Gfl%VV}Bo];~.<6XTEk`*&Vz`-');
define('NONCE_SALT',       '^D!Gd>4m{+m/-sj5-TA3/.S+R|-8Zg;y{MURd?.+8kws;7R/j#2/11fHW[<,PZhQ');

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
