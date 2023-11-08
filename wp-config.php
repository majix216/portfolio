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
define( 'DB_NAME', 'portfolio1' );

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
define( 'AUTH_KEY',         'z%$:~x/=1%~O#LMA8@Q[0(rkF`Yl[e}EvH.Qh0F.AOF|s*~sHCl6p3M4ox^PLLIq' );
define( 'SECURE_AUTH_KEY',  'w!DHd*KF)V#HUC5z}r;Jw[s7i>rLG+(p}d8?LB_Mk6}l{6T$qT[2d]WKDQppT2o{' );
define( 'LOGGED_IN_KEY',    '}9iRRSjZ}EC?*$%!qz Q|+Cvi>de.>Bv)W>)(/K!b8d{e5$.{b u$XtX_F Q,*]0' );
define( 'NONCE_KEY',        'Lye]pV$Wz,3z7?OuF=^GGs[=,ppT-@cS]0>HT5Q/~4Y]NBcUhyn;W%II^WN:%>NE' );
define( 'AUTH_SALT',        '.d,fv;e]3<vei>Awxt_<$,m|^wi`&D29iOr*gwpIb ;KNk4lXDfR/=7q23LQ{PY5' );
define( 'SECURE_AUTH_SALT', '!,/qy,!Wi,87)4kXw8,;uJ~g6oMU$YPy[D#mXN_oZbTbAhi5Lq6SQBN&!}1s$lIx' );
define( 'LOGGED_IN_SALT',   'Gkf3VpB1FhbVy<u_JwuIG#<KV^LZAYv-3UVXi^ncariil$^!&hAZy=~iWGpJuPPv' );
define( 'NONCE_SALT',       '=x2290*p$?1F*4gt)oNM;s52h$GHM-kZ/Y=zU!pQrWYoI9PnMm#gKg1q+G+)5c5h' );

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
