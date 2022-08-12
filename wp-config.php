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
define( 'DB_NAME', 'db_who' );

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
define( 'AUTH_KEY',         '48SO)) [|)tJS1>)Ig+0Ux^L7A%$<eSnq/1q)kvjo~5Wq2z|X)@#q>5b[$U>O]t%' );
define( 'SECURE_AUTH_KEY',  'CO`JXV}+3HOD?e+b.)K@)J~qp{2[u(;X7BkvO;}fu=G+ak %u5li7vzWc0 ]]Tb-' );
define( 'LOGGED_IN_KEY',    '&z,G<pxcq:sO~BxH4B>m&^8F(d=1A/zK-ELMdR=YJo{.VsYQJ:Dlz}:K+V.CE]Us' );
define( 'NONCE_KEY',        '{aCU,S8~ZgbPK6noY+FOkm %`agGZz=jH~@uV]`<@q[J5wm|Dnrux/54#bBm&U!s' );
define( 'AUTH_SALT',        '$3?E,z{hK3jf@]l{4zF d0P4$+bMa@x*yu C Bcx^K?5-fH-s~5e5f,2;Hdm726X' );
define( 'SECURE_AUTH_SALT', '()K0<2`I2.kaeZ7(}p*`tt0mTL)CE}$yT)?=8?G-o[2$jtiy|KM0H%H$Rq0.(/]G' );
define( 'LOGGED_IN_SALT',   'Vadf)dtY2-BH*ga!z[Ej.k[G&AxE<pq;]&x~YWxERcP41#&gy=B4^32Riu~+lSau' );
define( 'NONCE_SALT',       'eiFABs=68p:!eO#TZ6N{=]lW1D;M4]]:nm^(a7S2P88x.7wnzmu$[-VS!*+>/Mdk' );

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
