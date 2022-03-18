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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9gLgQ349wEqCKze1QMlSG3u7/9IQowWJPMwCjy8R/yruY3vaRL5alLYm8/o6TAuLRuuJ3ZIeokP0L9iXCKvK3g==');
define('SECURE_AUTH_KEY',  'VAFsYHmF28WXb98phABGPf3iQP0Iv11seog1CZuSCP5UXAyK1n0xwiaNW6aBUyN0qGqLGEcfKJED8q2kIalRBA==');
define('LOGGED_IN_KEY',    'yZzOuO2o2OYnZy4IuAufgJRkj1b8RxkMpTF1caPYxfHtl/BV2ZAD99IolKvIkKk8PLh8+OAZsT92lG0mQHz6qA==');
define('NONCE_KEY',        'R7trCCYjC+yUIXFapGlfhJn+8d07vVKNB8JcrarKaslWlE7tpFCxcvAGhbbSLjKDElqtax5ibD6WFPUMqhccsA==');
define('AUTH_SALT',        'rqPapRmbVldbG9eVgbBPn6zHwSTaeuxExgtm1CkdPg9+fyPbxXLY28tKxyVjnumcpONq4k40WaV3LSQxY95KHg==');
define('SECURE_AUTH_SALT', 'WZ3kvMNW48rgz+pyqbmBhBvbqak7Qd/S69rSWTe4itjiZ61yvXgOrZpMM4HhGVpF6ct3D4xVBwbB9cdscyxizg==');
define('LOGGED_IN_SALT',   'IwBGALWbCYlPDMKtLmNi4JfZ7+7qt9C4aaxpSP1zgd66I4jQi7hCv0zZNw7TsQ31S6dNBU4GqdMhNTVxKbOPUQ==');
define('NONCE_SALT',       'eju5o2btk2Wt1KeKxeR43BaC8IcPYhkcXTzj1MLxuWG7zHbmCNM5c8vInZp4l6XsjoVjCFfiEX3g7GrOcScnlw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_HOME', 'http://devchen0771mtm6303inclass6.local' );
define( 'WP_SITEURL', 'http://devchen0771mtm6303inclass6.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
