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
define( 'DB_NAME', 'netedge_happy_hive_db' );

/** Database username */
define( 'DB_USER', 'netedge_demo' );

/** Database password */
define( 'DB_PASSWORD', 'dAl+PRu]@VS8Rn0R' );

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
define( 'AUTH_KEY',         '=f94:Ua7B|p{@fl-,FxbV2Ipk{HxFdHa?+uKP2kj}9d`X5%yl6<7%F%$^M {7<V@' );
define( 'SECURE_AUTH_KEY',  'z[f(Pzf=Og2fT~4u8x?hzP1[`S/*vDh~_cebi8S6,IQ`ksYz:/&{=#VAn)o/0rTk' );
define( 'LOGGED_IN_KEY',    '(f8_d,,5%}dj_/>&.O5oZz)~XQ-0ic5f/K^f#zoGInl_?y$A.ThFA7:o5v}&P$bQ' );
define( 'NONCE_KEY',        'gM*e21eI^t~L^ufH) dJ[X?5cyNf8_i-=szTJZ6dK{JQuk$nU,` ;F  ;&G.ud}C' );
define( 'AUTH_SALT',        'r,=Z+9&i`mbJ7CEnjqlMstcUg}$UQ%6&dcYK|Oz@8RWrv&JSP_)cXIP]X6<~o]UI' );
define( 'SECURE_AUTH_SALT', '25?_2IF;n>9BqkvFdJ$qwTKZ1-!T6viB?Hw[9+_l`wJs{hr#Tb=vj`~wR~Ck|E3-' );
define( 'LOGGED_IN_SALT',   '&*iM:Jq)iO/ro4xYb(Mfz/c 5HC3TR!8XW#I/KFYd8Y`DFKdN|5nZRzjtV%^D/WR' );
define( 'NONCE_SALT',       'Qt:<1rhVk2}*=LaSeg{vN8j!6<>DP?w=K,TD|ofngp].|63PD.@OR0xjPt6%>1|q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'hh_';

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
