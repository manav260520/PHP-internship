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
define( 'DB_NAME', 'woocom' );

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
define( 'AUTH_KEY',         'mc:&#888cvxK^w~5J]&*)0C%#H|FEMgc<*SPRrO+I:>?l6?l19mI&&=+R8m#,Y[R' );
define( 'SECURE_AUTH_KEY',  '6wqU=HmM>vHpwq#&85u)iHCJORX]ZtX~_0Gz44{4@^|k7]jjt#DuuoCBT)DKZkF;' );
define( 'LOGGED_IN_KEY',    '{4SkUdN~ Qg5RRafC,=UAGw@TqHo-@_<7:H|e@g@gMJpyC4;;>qgmOx=8?DQis2K' );
define( 'NONCE_KEY',        '<w]I6erv:Vm;oh,}swt>A Pni+<AXe=?Bx*|T2CE%>Kf^%qs,<]LX*n{xD?wQ%*[' );
define( 'AUTH_SALT',        '^s*Zt.gC0/`.+}jOvP`/cXqs%I5@vXKdB-vC[&c*suhK!{n~OV<i1^&%I1Q|AMyT' );
define( 'SECURE_AUTH_SALT', 'p)7qmW`2HR~W}_2?>4@mLeCcT|}^-5Cju>Of,gBC$_,7)=^oZ$}IpZZ*J;P7Si&a' );
define( 'LOGGED_IN_SALT',   'kne3rh-DZS#fTu7Y94r}~p.NcWPhofLA&A>Lw_Z^IM%ZG>n).y5scjRxZ|;BGX<Z' );
define( 'NONCE_SALT',       '`XG{?Zy-DJJikV#2`v>prztUxC:[T>{M-[ I4FmX[5Tg<=ubat@iQ5w7Eo@DvF(0' );

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
