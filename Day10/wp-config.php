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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         ']]g;S(2@w,>HU8Y#O<b@Lq2iXm Gbe9]Wk+T=F!Yvv 9_+,.Z3fc2(VN|WyU]||%' );
define( 'SECURE_AUTH_KEY',  'mLfL1.=V-IWV}D6}:]4sSBqSsL6k~P`9zAc|1Wqqw]uwUeEz`e~#R+kAS3lD+YnV' );
define( 'LOGGED_IN_KEY',    'ovgGz|oFwwPUxe0i,_|F*YgxX](qF[uj+[(Fe9E]_ck_TkvCPG PmyC<q]1S]Emv' );
define( 'NONCE_KEY',        'TV2qkbt%jp3QigGnp]pbR^!e3=LMi{0R(Vt*5MJ-a?L,~bksNkXl{79wwW%2B]O%' );
define( 'AUTH_SALT',        '++Zr{Tf`_lNU4p!U8Yf79H5}%Rz_-z`?D_zCheUOb B7|NJmpwgF,8nU@5IeUSob' );
define( 'SECURE_AUTH_SALT', '9i7v6kWrOn7uI}b@x)f7nGz/83ZjV/B 4>AfU,AcEYwL-sY`Q0eyFF%Nf]B&e1`?' );
define( 'LOGGED_IN_SALT',   'suds/S_h4qHpe**XyV$Bs]YY7/X1<6B1G{38njCb+f|o8i6FfG{rMc_kLaW18,rc' );
define( 'NONCE_SALT',       'uiM=]14G}_<;hA=Kr|w77G?Vzuruyp:PS`$-Bbn@X +czJq`TJc>}.pYq}RP#(AR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mg_';

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
