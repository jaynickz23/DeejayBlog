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
define( 'DB_NAME', 'deejayblogdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1eR$#oy0CO%/LV+kEXd`7!m$o0,aUuP5CG<2aGJlR-Wk41T;,>I4n~bqjMc)py66' );
define( 'SECURE_AUTH_KEY',  '.oNMg=LR@)=P+BE1T#!NBQKD]3! Q[nQ0X,;Z:+B6f^zc:+sPn 5U7 `&),AervW' );
define( 'LOGGED_IN_KEY',    'Fh^G!X2~jhXh~TTd:D}mDHrPC6t[TEobnf67Va4{/uJP~qma+>g3;9#[txR~2Ql;' );
define( 'NONCE_KEY',        '?.1AAVRY< lIrLC48{#&%gwD4LHq?1YN2Wm$goKy,zFRFSk{l,b&6b?aX#r2b3WA' );
define( 'AUTH_SALT',        ')~d*PH^M, hH5l.rSH<VaP9!V9%.W`{KLsF}3{3z.VK|*6,2j9_r`huM7F-M%ilo' );
define( 'SECURE_AUTH_SALT', 'Y9= mypd2kPn vAb.Ip*7#-V1uv]o3md!gJy| OD1Nq]86L_Oe?+)bv3r)WCcB>I' );
define( 'LOGGED_IN_SALT',   'pXWP*0D%JtD26K#Q|Upg#Kw<NZP*XL+wvB*f?]GTQB/QEs9abWu=KhmIx813{bM]' );
define( 'NONCE_SALT',       '<ioOT_Pu=.8R-5OoWa.tG6fe{}pjpCnvBSIB[Y}HP<lThXVvK*wYC_V</^o;Rzdc' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
