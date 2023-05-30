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
define( 'DB_NAME', 'tech_overs' );

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
define( 'AUTH_KEY',         '7ywJoQ7dRi*;#XQ*%>]}XW:yF*! JU8x[$2?: A9u*ADw{BqJ)oC6/8*sE!Ic[i<' );
define( 'SECURE_AUTH_KEY',  '~=kr#exfcqS227Kj;joaZ(Pcy{a?U,g,:&s44}V!3h|p8Nf0g5y%_z/YBSzP==@ ' );
define( 'LOGGED_IN_KEY',    '6wyQaWhxkx.{=g}Hqs+43+krEmwJ.jUf{~{XszU_Fh{@+(2JwPQriSV]+fe])vUB' );
define( 'NONCE_KEY',        'a{FdzY^$A}W7?bLhOVBtaGz(uONUBK5K35dM+?BQ4`xKjSVfI:4/gL35&Xs6sL]j' );
define( 'AUTH_SALT',        'PWS)J&_::yaKVWQ{WLN[=:xLs8XZ^<x%sm$?4ZvXXQ*q=W_0DAh7.FZ82FczwbuN' );
define( 'SECURE_AUTH_SALT', '9xu<:h8t=0gi%9*HkM:/N-pitYj|Ep0}9E0GFrp}g9zqH?ePv;1sv-C-up^!A@%^' );
define( 'LOGGED_IN_SALT',   'ilj@9ON(G:{HbT6H/9>y>t4W-fo~XDX8Acv<`:$T|J%yHhjN I9zSiKY/AgcBy#k' );
define( 'NONCE_SALT',       '&Kb&Peh==j&n`Xb8ga0&vzxXV,@U,om~iz{{lgN=1lz#10-/IF2Ewsic{|}LBg6v' );

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
