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
define( 'DB_NAME', 'oporfin_wp_c7mti' );

/** Database username */
define( 'DB_USER', 'oporfin_wp_d9mg7' );

/** Database password */
define( 'DB_PASSWORD', 'RN5s1%tP9jqa1%A3' );

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
define('AUTH_KEY', '4MjDt4]70ZRK!/[po@iSTPL8N2IT73);e6q)6(09565%hW1)0P~WwZ35br+75p@7');
define('SECURE_AUTH_KEY', '29j94nhSV8ygEDJqJWBq6ytNH3e-57%bg(;zccDj8i:%_-w-UzH%4n!&6[N1s476');
define('LOGGED_IN_KEY', 'VOE)Os&G(c*((|@BEmP5U1yn6k3%0#820MAZ&*[h_itpwdlYtndyA8uX21VYl|iH');
define('NONCE_KEY', '1P!]s*P+5mTI;D-S1%64z-&JEmO_:R%5bla313y9eIs1vydS2I/Q[T(5SIxxwiWI');
define('AUTH_SALT', '56~cC/LX*S(4%5_8MUI!+SX4-[uFq#I%m)%]t6Jr0Zws8No0w)UnpZ88Um6Mgf*)');
define('SECURE_AUTH_SALT', '8dnETGLn270;5s0cKW9%Q8qv/Qi/6kz(rv7%E1War+q&t@r2MEJ:C8T5jaD&fji7');
define('LOGGED_IN_SALT', 'yUy(+]D&#8i/VVd+7i[8hV-]e3F~4E|TQf2K0rUP%|4/3S]1tsC/A4%bqEQK9+[7');
define('NONCE_SALT', 'f~BG_3%a2~5o/9*90)|(J&%7H|R92;;SD&YROF3qy][1j68;j*+GOE4&t9()]-7e');


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
