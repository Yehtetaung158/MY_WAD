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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'My_WP' );

/** Database username */
define( 'DB_USER', 'Yehtetaung' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'n 1ZW8?a2FS2^uhlPVs%1Y#.e-i,h`HW&*Sb;x]6m![bkokX1r: v7axP2% ~ aN' );
define( 'SECURE_AUTH_KEY',  'iI8VcXP:YV]~Uh#j}kxU(7+@)Ag(tPZ3{}gd*:$E[N,{{5m~l5[oj(j#lWMLHI;n' );
define( 'LOGGED_IN_KEY',    '>{tDNK=tGD0EVmQ4`U(Fh0qdBTCdKMo:]0KVnDy8>H?6$x-WYvXULwkq>uUQ, J)' );
define( 'NONCE_KEY',        '<].+HNnhHN$r!lq<7zh3sp~Q,.N5|n0:QPE1@Gg=SpVMofDWaYGxRdQD.0,K$}.O' );
define( 'AUTH_SALT',        ',%NyJ{H&Hiv#?KAlsk$*7by#EN03z.(yrUr.`8< kM|m15XwqdJbkMosr&[/=y+V' );
define( 'SECURE_AUTH_SALT', 'tFG}FVraE2cX.mW=_OE#zP_&;Bc^t,} vr6}[0IM=>bgs7C]R~miDwH xP|=+ XG' );
define( 'LOGGED_IN_SALT',   '#|OHB3d%!&/=7Rhv8fw8S&hJ@&YoyGNlx*~WwfzZ|^g0h8-?){*b;){5u-bO4s0b' );
define( 'NONCE_SALT',       '%h#jtYV,pYh0fW?qq{vq6/DMV<)H^gf^1`f^MBlnbr|*5<SL}2wG^XEVER<oaOzG' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
