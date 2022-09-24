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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vuong' );

/** Database username */
define( 'DB_USER', 'vuong' );

/** Database password */
define( 'DB_PASSWORD', 'cutcho123' );

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
define( 'AUTH_KEY',         'T,Q<%u1|WVd)D=B$0$nvDhf.LC/^MN/?}crXU+}Qc*pJ3~Iu|70c::9n7G8G/%Ns' );
define( 'SECURE_AUTH_KEY',  ']$5g.Y?HikuPO`^_n 8`dN818{-!v<Vau~-wO>xh1ZZ(HVTdk2H/k,*v,:!-bcV#' );
define( 'LOGGED_IN_KEY',    'zQBP<x}PK4MggcP}8Cs|g.r._v=e6^,,w9@CO?,w{aX@j:3g?K;Lun7`kcu$s9C]' );
define( 'NONCE_KEY',        '(<.)nJ<dH ^yNLXQ?8v,e}n=/s0aYtV? E@GF00~H(:IUHxa;Pm.4 Xl87gtr=},' );
define( 'AUTH_SALT',        'z,U5Xjn3@C(~#j*u5s4#x2?}OH%G;*.a<8ywh[BQeEn,&5zd>wcmusX#6K[2Edm.' );
define( 'SECURE_AUTH_SALT', '4tpkp_xd1p$#l> #ROGv$eHMpSz-3n_eaWIrWAX#1Cm_3Ox0iA#Xktjg95]zOxA4' );
define( 'LOGGED_IN_SALT',   '[{Yo|g%#Y^~wt491mGe _s<,jSwa%Q7m^VQ?0C~So$ ew^- .FOEe4_RoK?y)3bK' );
define( 'NONCE_SALT',       'j${S(s<@ Ag q=-fe*wToqldhT4fwECK8.Wv$I4-xDR euKdPlCH#N_1/lQ;:StN' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
