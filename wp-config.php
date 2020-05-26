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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'profile_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'K5G/SOkQAlu&vs?-5}09BYyqSC7}AH^Kdn^^;%;S=_%DGs,%m f*#8L;&TEx^7E$' );
define( 'SECURE_AUTH_KEY',  '}B|_8@:O)o^C`d`HoP0`X 1:7/IA6SU73$4*eYS0_6*96k$x/e*LUax.5a.>F=(=' );
define( 'LOGGED_IN_KEY',    '<as7%mSCRoM&o@|F%j*.R-(:FBML+t$q*7{HI6%KJHW4tjAA`)qJ{8SM`JRkyWT-' );
define( 'NONCE_KEY',        '$k#5.qF7M)ks]]}D2iF5dvIHfHa@(Q:1#eSm09m/TJBz_j1`X,qL^YV`yg*6_XA+' );
define( 'AUTH_SALT',        '659PlSz^lK&g<:N :*7+xKiv?>w|IPL&<%%WRIUuK~IOR]><:u_81v3>@T<,f>3n' );
define( 'SECURE_AUTH_SALT', 'vn_?7pu5Z/ N~j@Tp5*H&O8%SBn_>^p(8g~r@-MA~3t:;g:B#?*PB|eh$*x`zF_C' );
define( 'LOGGED_IN_SALT',   '24FYIkWc<v,1|h*liX_4cJtp~nAX>^l<oa^,b|lJC*h}M?(D} gsvztNZ/2^C;!/' );
define( 'NONCE_SALT',       'x+PO~s[F2dbD@w}$>KR7%XH{ISti:Xb.EgN$Qe-M^l*mSba8a0$q(FL1Lkbsj> `' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
