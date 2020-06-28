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
define( 'DB_NAME', 'ElectronShop' );

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
define( 'AUTH_KEY',         'pBl{v+cuGV}R36,#Aad]]#^L@01yxPOx[7nTtot-9+lu|[;?~@#*4/`0ZX*b+d|r' );
define( 'SECURE_AUTH_KEY',  'W@_gG{so]JkxIC!z8}BC%=L~eSH-6@{;vI*,8GMm +=+P$&|xLF0<?fO6lQ0g`,)' );
define( 'LOGGED_IN_KEY',    'P|+ug*~ Z3>DVc;vM><6t#B(vV~%-WU_ANOXFS;2|oc{Pj$qS1z,Cg91)g}quXY)' );
define( 'NONCE_KEY',        ',LU-9= 1IkR0&gZ}!z2GN0l,B)wIl9n=QO#e,KE`|3{f{LVB~jqiUP<T@q..w,7D' );
define( 'AUTH_SALT',        'cLkKqs&~=AF`:-#*cm<>PABL%M0bNBBk>8_qJmS#F:8T$J!p?^}5?LE3>~@::R}j' );
define( 'SECURE_AUTH_SALT', 'c,cF:Hip]1i@<ae*d-?szm.KTu-sXo;*OEK^wvLhZ-W:;tvHeZPx@HNd.QL~&LZC' );
define( 'LOGGED_IN_SALT',   'Du@IzdXNYXDI4a1PMZ3<dE3+Hb[8I@}l!MG|[`jiqdl-S(AKc60w=L;]Y1yc:;ry' );
define( 'NONCE_SALT',       'KqV>GtX`oNS5]1E&-T,)5F+Qa:%n%mU{fp=OHU=w#/C{izQfWGlJT%3Pga;F*La2' );

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
