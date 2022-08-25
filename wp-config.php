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
define( 'DB_NAME', 'Wholistic' );

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
define( 'AUTH_KEY',         'c9SQ,x|M`rl,>/9V6lu.}-C?]Y0yTAOU#3`5HN!J+tsz3E7(CRJLl#-Q}A2MCrQb' );
define( 'SECURE_AUTH_KEY',  'sR;nGg^Y%peZrC+$Lz w8Xk6*IH4?La(|hh1;FOdK;$0^ZI0ks2WH[9QxyUOp.@z' );
define( 'LOGGED_IN_KEY',    'DUI]xbyD{!E4kAkB3#4!7T{YfrhGXl/6ddaq~rU<pvFqKq2H~vDn+yFUqbyxC:l9' );
define( 'NONCE_KEY',        'N>$*Ea2skQ{0}N>r/Uu]u<Zu-/Hr?GR~K2uIB61Zo6V@/dfrRC|aBensFN/rVbZ8' );
define( 'AUTH_SALT',        'PpcTpK{M0gjRSAtgMs{)<fM[yDu^6rA12&WZ#0X<p8m.y5{`60@PBW*!lR;mwYB;' );
define( 'SECURE_AUTH_SALT', '8`hDLO#=kk71Ogc?YW+K[P09xH5J0O9|E21ly7^EM5?W~6$B @gf n,j$ uP^4e8' );
define( 'LOGGED_IN_SALT',   'I)H3v,dn`!i|[zYvm&c)l[%a*0Q1V+gVppMx(n$(6v=m`agK!ThoOS3rrZUL|S{t' );
define( 'NONCE_SALT',       '`dV`pwbilSPl8_U2nE7_TIO/Fz=WF Wzq[D]dX3RwgLpO()!3m>JHo(|@p#re)L`' );

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
define('WP_LOCAL', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
