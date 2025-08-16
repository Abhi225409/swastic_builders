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
define( 'DB_NAME', 'swastic_construction' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'O$?C5x=1x&yaO+]9-CFzn< 7D:|]C-go,DKS1E2DqyLgo:etHy`gY~~bW(nNdS?8' );
define( 'SECURE_AUTH_KEY',  'W1yq|8W7qW_RCdxrNJpp/{i?_<%?tr[FlUR(6$=7+si#X8>`Uio;U;v.kqQG=}y*' );
define( 'LOGGED_IN_KEY',    'N9skg (aPy;93ke<NQknKtg2}Nl8S(uN+2%6farfc_zBq,2#<%~55I,oF%Xi6FGz' );
define( 'NONCE_KEY',        'Hr6RK?^M5rM]Jv]agj *_OX5w}av&nvM8w^PQQ|,+3]xc4(OX,],G:dvRC?Tn`5:' );
define( 'AUTH_SALT',        'Zc5cEO]Z58KR?#o7)pRt~l2}Do#lm4n~jrCuO/dkdQ4{/_nbgFVQS8+fl=<d&3#f' );
define( 'SECURE_AUTH_SALT', 'gmUFSacX:m9P*Rq@u<1[1m-{ $rgX%2ZB$r,Oj+k:((1i3x^z`HUfk04krGEcB5B' );
define( 'LOGGED_IN_SALT',   'Qa7XV)nD7R=;g[;o3Sf%1TEK}oKQjdRib|bn9h3l9]gjl5Q,M;>W?mZTv:aE04>-' );
define( 'NONCE_SALT',       'U>?nnfz!nX!`U+k xbAt{h*^Wm=DYc5OB8eabm%)gT{MMLq$nR.SjOT$nf[T/V]E' );

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

