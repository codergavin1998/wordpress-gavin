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
define( 'DB_NAME', 'wordpress-gavin' );

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
define( 'AUTH_KEY',         'r2i#3UTD1p:cd2p@O2d]s*[Q,PyRlNdr8! oP,LtcHKAqS$>QIX*+kUKsJ*7biGW' );
define( 'SECURE_AUTH_KEY',  '!l&xTY?N+xgo<IlQICPBqyU7@82kH^edsY`. jmC1r1.1>?QNEwR0/<B0XBZW1}8' );
define( 'LOGGED_IN_KEY',    'P#|~G{@m_|.bazha44bGF:+pd5dGOgdSt|8M&;5Oo!Y@mTmu%ke:{xiK~j#&T`9G' );
define( 'NONCE_KEY',        '~B_i/BDO|LKcK,gMYEvn@s0:;LG53k1^8kwMV+n_c6_,WHYdn%OfQMms!ZGedky?' );
define( 'AUTH_SALT',        '1v)y2`egO%B{Dy$S_I!kv7,jCmgJd97gXmIZr|RxP_Vbz`.+17Ind2t4!tc!Ota ' );
define( 'SECURE_AUTH_SALT', 'yY:t=.BAwCq`P@Hq[[MufFDC@;/_!sVRt;6c>l^E=AnSj|oRby:E!HAGvpO/u/EY' );
define( 'LOGGED_IN_SALT',   'kILmK-SH`FHr4gLJ,g#UkkW jR>OQcM]cNujN?,]YIsV90Z4dvupuyDJUCyCw:Oj' );
define( 'NONCE_SALT',       '@Nv!P=wLh/B?|6~X:T$(1,4N{[Y2tLVM$J#HapK[*=x-_gUa/Gp&=n*qDab|9zc_' );

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
