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
define( 'DB_NAME', 'Cooperativa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y9YsGQ9bWutzaCmv81JsaUJ9b9qZ7IHcMm8Lr7hP8AViR44piRrPgkzplWYGuo2L' );
define( 'SECURE_AUTH_KEY',  '15kIwbXNkwBa1EDdU05WmzgEesfKF7U3HaMojDRBPuWPSjoVkudEQKTr2togbBjI' );
define( 'LOGGED_IN_KEY',    'Mbfp8x7MrhiI6U94oYa0DoJLBdTLAUmgtXKQqpcXcN8Edzz9QBMRrRyjkbynwu3d' );
define( 'NONCE_KEY',        'ravPb8NRcqI0HkBhLeRc5yd2ETlzHSzpsWYhyFtiSqSkeFodD3MY6WC74wysY2GC' );
define( 'AUTH_SALT',        'jLrJYputtaAu6fO1ChCvL1sHw4lkYi2OsbxgQgo1gNBRPdcMXHiBp0l26yzWn6A1' );
define( 'SECURE_AUTH_SALT', 'gRpQYEHJVREDNPIAOy3VU4sWTCGOBktnITJNjGT6EgU8F4DI7TLFtr0ZRRsNPjDg' );
define( 'LOGGED_IN_SALT',   'fMI2nwKbqd7mgDQOse1IdZ43qkOSGzAGn68Rb3Ai35IXVFXLbXScr7DkTCYrYg5a' );
define( 'NONCE_SALT',       'qF4DahRUewUFmKoLOliJnbbhXRCpu2IkvbJ1q2qdr2FdGRwxT7SASVfNnXbOeyPP' );

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
