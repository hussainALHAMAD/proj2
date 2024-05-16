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
define( 'DB_NAME', 'hotel x' );

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
define( 'AUTH_KEY',         '7/@TJ?,oY|n}$=)a<Ax+W~:H!i-zwA9CLS{#VSR*B2c+A(E:Ahm>w;OksVC/:6ud' );
define( 'SECURE_AUTH_KEY',  'vXF|$h_Sx>w}fX.jR.f=Zi=^|.K<<UM<HctCX2Pr6:F2OT$9TR_$83`eF Ze,C,h' );
define( 'LOGGED_IN_KEY',    '^_tDnHf66{h ;^Oz))P#1gaY)7E.d)h08FH@WMb10Sd}^eKM((f]i~9sh]o[`xO%' );
define( 'NONCE_KEY',        ' H)ym~H0!(y)W26)jsXRtin!RcEmzOgx~]UE@K/8y<wZ=d)1)sa--Y$[bq@y=JYo' );
define( 'AUTH_SALT',        'Jwb:!O(ne_4|`5N$#8NT1]|.r|L4v|c%C;c6Ny8O(fwB!^A}.u~;%#Mn:d<@$6Ku' );
define( 'SECURE_AUTH_SALT', 'i[ /e}=}(-28Cs):&E4:(p;}~vC}4TpfqeS1:c3<mm}-l5&G*%0ynaDR~lLdlJ@}' );
define( 'LOGGED_IN_SALT',   '=Qoxdl<N~tq[( d`;d2`JGe0ATnN[z?ea4r>-i+L=KK?[zLqpRq32zNHLN4h_mKR' );
define( 'NONCE_SALT',       '4b/:)qJhE^]}}/qT,AVu-3g1s.((IWWns(nA8i%(.[Pc)BV9W.*/Y^9<%k`PzD][' );

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
