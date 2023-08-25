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
define( 'DB_NAME', 'Digital-Catalog_db' );

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
define( 'AUTH_KEY',         'bBu&Q7N&[3yYgSU[e7CD[)9.(@nv)$iMh|ZbN}bj;Qb 3Cu/%3sZ<kFZV3T*ulTk' );
define( 'SECURE_AUTH_KEY',  'kurkWtN[fl0mKC FHoyZC*|S8!PT)MaW!f+g.Q.>*#PHLt4/{0u!?fpwU(^cugxv' );
define( 'LOGGED_IN_KEY',    '(H4]>xdO9Pqa]>]dMa)u)N%Z9%4 z&SId}5pOK%TCfcyI-HXQ`94gt0 7%P)$xuB' );
define( 'NONCE_KEY',        '0q;*)b>e}~X~*L+ty7@XysNEbk=M~g%M!G9Z[s@9Q4s vj*oCWcd2xRzlIP `AdK' );
define( 'AUTH_SALT',        '0BW~]^@n#O8vc -}><%3:f@;T-rebXs|Oa4?a%tuA#t~PFhBfqfPQ%p9l_m6V5Pj' );
define( 'SECURE_AUTH_SALT', 'B$qxlRs=_JqQHN?!>]L/t-?)|lLFV/=~7Ir{v-nsduqTcJ 3fjh@Mt!I27-%Q(,c' );
define( 'LOGGED_IN_SALT',   'K]R(971ntS>]wKCOL+{SYMiYrzaDPw&D`rpk5_GSHnp^BC?)NzbT</GF3AZ`$ ~b' );
define( 'NONCE_SALT',       '41sK:P9[ma5#~{8=t&uXAv)^t|U^p+r@|)2tXv$xDd3{>yqI8&|.NuiTP}m(xwR|' );

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


define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
