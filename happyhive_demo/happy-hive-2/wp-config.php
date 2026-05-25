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
define( 'DB_NAME', 'netedge_happy_hive_db_2' );

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
define( 'AUTH_KEY',         ')aU%pj>{sO]2RCM*WWxL3~?AC,r|**x}r^l$n/XC+X1%^DSQAm4C6W_j7tC:cGuV' );
define( 'SECURE_AUTH_KEY',  'yo/b/gme:2*SO&Z?0V|>c._D$OaZG?eP5Om2v-;j={29[Y!,yv;9X>I||TX}Z9s?' );
define( 'LOGGED_IN_KEY',    '?5KUD1&5Ia%s9n|Xyg5z_ul{PrAo^u/}i>25gEn_Pm7E()L-}em=qBcW0hSq3/T_' );
define( 'NONCE_KEY',        ':*CGsQ ~Io8F5Usl3b>SnkEoY;qE~z&>q9bo!K|iemp#e )yBS>wNo$-t|KvaWq!' );
define( 'AUTH_SALT',        'roh12/jqxG(o:X9[N)UB>1z>_#!YI)Q?dcQ%(RLpzbvf1wRf!p%lciq/6[mJ8DxG' );
define( 'SECURE_AUTH_SALT', 'sX^jKS^%8k~mdD@ob_HR0zA3G RJ]l_F<BX?)-?&|e_s&C&^@co(2c4BP;A@8Its' );
define( 'LOGGED_IN_SALT',   'nuaKyi~UV*5=R:aJ]Jbn15.Yj0Jh(KcCqqm{A[B3Sf|rIBbaRB7Na=(<pdC]e^;=' );
define( 'NONCE_SALT',       ',&m[}Arcf(5(|B$`Fun-sTu=^nf@yWR7sYighX3wS%2Z-MLY0c0y,^mM]Q59g{%.' );

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
$table_prefix = 'hh2_';

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
