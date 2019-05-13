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
define( 'DB_NAME', 'vmstr' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '654321' );

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
define( 'AUTH_KEY',         'n_K]`0i5FvO3_p^rnKa=yZ_>5F$9L%vp2^qp>{LMtMviZ-,uw}rOsq[k)_U1Q$ty' );
define( 'SECURE_AUTH_KEY',  'fa_$1]9^s[ ;X//9<lm@sQ@Xk^v|mip[<f|M`9P{I;5hU,4N<aeAv;]LFL`<N%I ' );
define( 'LOGGED_IN_KEY',    ';Jqwm5k>[jmN5W{bQ{j_}8!U_IY|KZc:l5E+Y>D.a3*Hg)T}8AY`Z:;M8b)xw,ma' );
define( 'NONCE_KEY',        'Q8MXPVB|??6X)(o_[E2?cPoG-9@]+gyVJXbc?G|,POm)=]#EFx>ihmIC+GD{M%w/' );
define( 'AUTH_SALT',        '<5Unidx$ OQcJ)!*j-`f_*8q/@}vBt_Lil,7k)>V(*S?,%o`*NB`8y}w(bYaK~5T' );
define( 'SECURE_AUTH_SALT', 'Gj{RlthD0PR8CNXZVjDSTsQ|)!&KlLXL135G</&bsu3PTh3D#Mxopg9z74XX(;0w' );
define( 'LOGGED_IN_SALT',   '=;NnxcF#L&23B/dA2P7iQK*9MZ1>Q Q3SF7{5u2Y7)`2twACG@}Y|GF0zbHnR0t(' );
define( 'NONCE_SALT',       'ctEPSvOv#!}au.@1$ /l]YBE*Xam u_9Z$-^3GJFc,3B0Out)#EvZgF?kqYz|{o3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vm_';

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
