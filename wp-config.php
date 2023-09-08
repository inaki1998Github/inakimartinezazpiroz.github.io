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
define( 'DB_NAME', 'inakimartinezazpirozweb_db' );

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
define( 'AUTH_KEY',         'y3>130>.sp/Qi#MvCH5|o_K4p7;[_2&/dbzg&XuJnrgF,l6U5I(kGO*Ek3R :p[H' );
define( 'SECURE_AUTH_KEY',  'A6<*vcA@o--R%zkRwDgzQ+/82}P.IzC>6F>_i>>#h@X<.`sidU%IgT+2:}Hfs?UG' );
define( 'LOGGED_IN_KEY',    'V ~fF[U~ DQF*)/N!v(|47Ox0Av$x)w~;re;1.Of]WXq}ao6bJ,-]=KyvXaR^.77' );
define( 'NONCE_KEY',        '6+uR7jb2l@gd^ N~#[V=5R6d[Q%/C@f0xs&!LsjuQ*,eFXMU?=4,sU@A);f&+&ju' );
define( 'AUTH_SALT',        'jpqyWBabkqAgp:XQO|3P3zzo<;|eiaQ89T^~n`|i+F57Q+t[X[0Dvro#2!X7p&3&' );
define( 'SECURE_AUTH_SALT', 'RbN#s4U1PPjG#{fMDwkVFl,lS/hy!aP{N/SQn>d-8VY@WJ.~8vl#LZv ~2&$[um)' );
define( 'LOGGED_IN_SALT',   'aaktrp,Z]t&>+WGgF`Y>{rixo2LizgaTuw.NBU0Apg2LdUM5 pY!1vf57|olKJE/' );
define( 'NONCE_SALT',       'D_ycuP1zhUp^6j1ek]eL-L;9%( :sPH=5TCoBSy>3*]W}iMqup_h%F2rIwlQ%>d!' );

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
