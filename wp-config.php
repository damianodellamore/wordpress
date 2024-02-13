<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2NL8BmL)70F?sg~x4bpyGl)~H G.>S<r7@_Gu=:lVT>![/2/*=c]r,`0g|.z8zEw' );
define( 'SECURE_AUTH_KEY',  '![&d6d)A_`xm2]$T+UeC#4uWWk}FT:$# E>8x::EPA(F}oj(CCKpb~L._6QEB}x~' );
define( 'LOGGED_IN_KEY',    '$?yMDcc0.i,!IdxhkLgvu>Ux6#EQwnH9s8b)9@26&rzoI%#}A;]_RS[^XoSbo|=}' );
define( 'NONCE_KEY',        'KipD-dt?MR<<{gCE[dj]QuOu(;+[U; Y<!+m/1Q!qKp>/*PaB)U8uW/KNTV0Njv]' );
define( 'AUTH_SALT',        '30(&sPoA@~s8P*x`o+MLi+CmBs +$TkMd*(d2&;9B@lJv!K*cq5J>`Qwmq`a>_mt' );
define( 'SECURE_AUTH_SALT', 'wK^FJ4k1NXE~i:r%[_.rs=&2cTB6wB<(f:+]hbx{Z33*HAz|{[XpqwS%U]sgCDD<' );
define( 'LOGGED_IN_SALT',   '(;Z/cYVlRtT9KN,>tL1+Rjzgo;bFZdkO-.oIMoQ=vr(>*8M0TLD[>4?TLMd-Lo=z' );
define( 'NONCE_SALT',       '!*&|W_)CT]5LRF8z/V%}dXa fXzT>9l_kruW)?Ak5!1!:*Ho9jdFW+p8>I`&|x({' );

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


define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
