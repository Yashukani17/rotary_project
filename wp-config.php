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
define( 'DB_NAME', 'rotary' );

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
define( 'AUTH_KEY',         '|1klfro/w.*^~]8[5ra:D/U@ztMkZhaCnH165Ve$Asn$t>NP=E@zA(OJO{)rhBNh' );
define( 'SECURE_AUTH_KEY',  'Ue;7$ff5Hkw^n~,3Bc=x_dd9/P/|o@<TM-~9E!+M6#QCVd?/kRggnvx*Y|VTS[zt' );
define( 'LOGGED_IN_KEY',    'k^]t9utyeErD<5*i$;Z`BC^x_VRUbgf)vF(s>75<S3fZ2mLD9xaE-g*u]s-,.G7D' );
define( 'NONCE_KEY',        '6oI~QjCtIjN(yC^;r-HAd(T3,*$r1f/5DZ;}Q:>;e3!E=ZJn[XUIK{FHuEGWT.:V' );
define( 'AUTH_SALT',        'tWN s)A^JBr<k4Z5KgGa.;LKudNV^$y74.4_D?mb!ujJR1[<s}8QHXKv752|zrWT' );
define( 'SECURE_AUTH_SALT', 'otF`SZ#wnw`y]TpKQ&DwLas]`Y9UyDtD08~F=p}98(n4ssMR6*R%9{.e$ I299lM' );
define( 'LOGGED_IN_SALT',   'WKn3`rTWH0LxMl3gRY8//{8;}hYr/,:1%Wy6n|138Y$b5tH2ElSa#Fy>u1K)9J%4' );
define( 'NONCE_SALT',       'EVQD<PZ2^){}N(iOd1du@2WsSwzl}^|pL>Y}A),*>TF#~cz$Z5qBvh^YTe:Q%eyT' );

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
