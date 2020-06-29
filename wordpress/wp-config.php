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
define( 'DB_NAME', 'My-Store' );

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
define( 'AUTH_KEY',         '-oO`yxz2t=0gNv^iIXxC_F56`c]~ioi# MHGE-<]V=`>VC*.dlp{$h2$M^#>B=8.' );
define( 'SECURE_AUTH_KEY',  '@!WbO%z2q?T,N%+R0wm`j00fxFMh8w!M}x/8=HYwq<Uv9DK.}^OGPIN1.qZupOLw' );
define( 'LOGGED_IN_KEY',    '>:tC,YKrt3oL?=;$IEc4t<PC~H1KOI+5[jw2>/xbl+%!TqJC~|BbYgb/;lNRfphY' );
define( 'NONCE_KEY',        'nUH&eZGj ]^=Ig&ukt?O|G>3DaM@6_D)1!$OyiQ_{wkCE[.^[GgtQ![_GA|AIPt:' );
define( 'AUTH_SALT',        'P$<D@W{$xe10L*,t&~ %MJ9fo<EI+jZdW|hzH1Pd3G;Iu.,0{ny<Wpx^#?Io[A|L' );
define( 'SECURE_AUTH_SALT', 'N$On|6ajj+et7:4Pfdf|{Ro|VBz$xHN!{]^7hKT0Y>/,2yUjO2A [J6Rb~cIg Ls' );
define( 'LOGGED_IN_SALT',   'W&J?BQ/]!f-SkNt7ndUF0A1p3:RIJ6C/Jc}S%|naG8.^0 y12@lX1{$v:&~EdDZ:' );
define( 'NONCE_SALT',       '`e;c&<m+xIvFnm<mRBg,0#0_o/mJ3H.g-%[LZ{|NTe3|$f#BjvRA9z2vH>sa|O#>' );

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
