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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oporfin_wp_dq94s' );

/** Database username */
define( 'DB_USER', 'oporfin_wp_8xpr2' );

/** Database password */
define( 'DB_PASSWORD', '3B^obXvTc8vc3UA_' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '0Q34*5:546mm7/~i:n-500%UvMVP216K|F~[;X7#YahCv]7JGx@_P;q037S1e3J/');
define('SECURE_AUTH_KEY', '!1&5!*9!o4p1[I%|j5(:FUX~8w_Y7D@O/5y3*590:_PZWsK/V79x12-K(Z%V8|N3');
define('LOGGED_IN_KEY', '~-mQ_2**ec|h8]TT2n1#);o#3P/FwkmHJkM:pW1Vn~2h5D48F[S]JZvs(Ejn20jI');
define('NONCE_KEY', '5*w2CfwwOqPR3z6v*R47IC(hQO2lxF*m_X9)uj61mXv&/S[~W|4U#45+bZI;Ty*C');
define('AUTH_SALT', '0c/Gh;~%jE_Lsgz9hA72o:y0(S4&f;6n0a/71E5|4Gv6oly&x07E:54L6r!%jOyV');
define('SECURE_AUTH_SALT', '5%!RVk&e13!T[7Fv8ii6M@y9[(O3U60n5[FYT*@2FMkL~[47W~9T8kf92iC3u-6-');
define('LOGGED_IN_SALT', '6_7+]@IYiELvH]*2G5gtS:jB)5ppFNP0z@ww%z%6Y);A]8sKy%(2_j19BYF)Lyi8');
define('NONCE_SALT', 'B6;[4;]4%W[a2&zjGH0LC:VQ]55UD:_r&37rL-+@43+4@x_#/XG(~(EMC!jA~vZB');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'MOAeKumX_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
