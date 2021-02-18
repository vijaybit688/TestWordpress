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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         ';_f$R0^ Q&9-U@^YNjaCj}MU{[LCDMd}_=^a0>.vXbT(j7D=.K9pfs`7wIaO uXP' );
define( 'SECURE_AUTH_KEY',  '$w<a=s:3Cc=wEO{[&t0wdN~oGZUb=vA+:p z&[7k96FBmcoufy-@>P<YB&w4&uY;' );
define( 'LOGGED_IN_KEY',    '3TwfCumTSe9Hh{ )Gv.,z=l)S7v|ozJ[<n/nVX_t^8y$Awtv@+B!JB,lg%4kFYx!' );
define( 'NONCE_KEY',        '<2xIN.//9WV7v)Qjo[t^ez,s<6G|xw!M|#g*dhPOKrpl:yeI^J<~4ObB-w*^Rx+T' );
define( 'AUTH_SALT',        '{0YIzA~r!22(UQyg.U>l0Jx!s{tNM%YzGIFgjj*y.R~.!k }B8a-tr`jeJSWAK9-' );
define( 'SECURE_AUTH_SALT', '/&T+Tzm#B6Qk[$$1[HMpwil3ZN~n-^1IbNZ5du58q:ztF_]AbZ_<uSZ%~bCCrJ_s' );
define( 'LOGGED_IN_SALT',   '~7-Yh)A#-iB@N(+q|jf|gJk0u1#ggYj!Z,Tv<[B[V)>hJZ([G>@D)ZaVcq@pNa|(' );
define( 'NONCE_SALT',       'rqdL&T|r:-_!gLG;f8$-!UIFDd*NS681$ZF;Qt!1Iy5Lz|e:!j~f9e|CpV~}jJMI' );

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
