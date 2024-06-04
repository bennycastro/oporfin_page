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
define('DB_NAME', 'oporfin_wp_d3uli');

/** Database username */
define('DB_USER', 'oporfin_wp_jwlhi');

/** Database password */
define('DB_PASSWORD', '8dfO_eWLrf5q*6q_');

/** Database hostname */
define('DB_HOST', 'localhost:3306');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'mMw~VM1O4-oIHK)vtodT93YMD9W2+23q!W!9/1-qb~xBco2u/vJ[K4#[6O@x+184');
define('SECURE_AUTH_KEY', 'CL2MQTh0f7P2P5+R-qM:z#3ec;Z90+I9Q1UXDCT9q0;O1roe(R153CI_]~47T3T&');
define('LOGGED_IN_KEY', '-w_)W07eu~4FFDy5[e%e/[JI6ONh*Xq(17A;WGRe@V7MW@ck([cm@U%YN!041SZ*');
define('NONCE_KEY', 'EzSJ1Dl5y@;@!Zj7&Ehm+AA&B2VbUNg*lKw:3+pZpt[AG!@&5N(6~8)l/3@]/ZG0');
define('AUTH_SALT', 'Y03|c;NOnC77qXx5-7!-#(7@5G6w0Bh13u7&4&4)*3E@&nyB7AhT6l~MaI@@2u54');
define('SECURE_AUTH_SALT', 'g80TN02IJVgr~s3Kw:wF10eQ~BRT8;6@79a2!JULI;/2KnAm72Kr7-B607S9m/2u');
define('LOGGED_IN_SALT', '3rE6e7+_:shL1cjQgpb[Z9-41B)Qh3*0fNkw4I3)IEOW:iAciQ(3](9fLrx@A6%&');
define('NONCE_SALT', '9Cw/3@2!zL2/qei#4Jq-t~MqT(3W4X)*e35g)vH9H9@DcLFsvmG~4f-a9vk5OS9E');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bpI4xrmq0_';


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

define( 'WP_CACHE_KEY_SALT', '9de0bd333309aea601c9a0b2cd70580d' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
