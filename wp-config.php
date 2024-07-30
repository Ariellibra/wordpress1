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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'b6cp.q3jDG,Lrw[9r@B2?{+4WRn1#?57,,Ug<ROy</2;M$?tKpU2yW!$FueS/yoo' );
define( 'SECURE_AUTH_KEY',  'A< =Y] pfBlUfM%`$U]8RBZDz&aMj{a6q(twP#MrHIfk-RJ0KbcfCe`2d.do!Nww' );
define( 'LOGGED_IN_KEY',    '}`Cyb_ @7ul~Sdfc3GJ:DM9E?66p4p{%VY58^T1[kZ~3~4s/HN,u#wUG,k}erkz/' );
define( 'NONCE_KEY',        'sl~XEGX4v/*K>+,9ZRNLE<Zg`nvA4gL:xwY=%d_t?7,JHEY?X>E,0YdXB`VvSJWx' );
define( 'AUTH_SALT',        'b7$T234J6Q]dz/84>kI4M>TY7_h@<<^nn<):9U*BVJ%zCV(;w#cdff FZNC;ETKP' );
define( 'SECURE_AUTH_SALT', 'g^~r=p ]9i3Z:$sQ// WT 3)MvkuuDYucfiIt {+zJX/+:](eB3.;@S5GpwAi)<y' );
define( 'LOGGED_IN_SALT',   'Sw1<>:),GAT[C,p$ub:4m:+UQ%Z7Pw:46R3{JVL=z>oKC%y3+X[{=9>En4[0ui>n' );
define( 'NONCE_SALT',       '3$HXGoej38+bU:z2_rHC5;nF>!n(y-=:YXaCW]O445Q` GB|kjog!}OgOC1bY1|#' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
