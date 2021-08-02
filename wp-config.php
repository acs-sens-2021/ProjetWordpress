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
define( 'DB_NAME', 'E-Commerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '4QFnRWXoZbxFDOXuvKJI4wsAV59MWsogpY84z3PSn3OC7TVSs2uSR8uSwwuxjGx9' );
define( 'SECURE_AUTH_KEY',  'HyvXgAN1oG8z81F4QCAe2Man0YNx8HiTb1FtXq5W8JIZ3GVFiNAILrTERgG94Da2' );
define( 'LOGGED_IN_KEY',    'm7HD6SsORP65mqBfDUZ80Ut2x2eSK0RenxpqKJw9SM9WogMz6pk3A8YMrruwtjbw' );
define( 'NONCE_KEY',        'CQsnHKbTCsXPBZvkzTccmG9xLivGuXK0cKvFoQtLBbNsjSfVGZEaz68iQ1fCYzaS' );
define( 'AUTH_SALT',        'ENODx7Zv1t6pr2M3m3xGylF4PCkr4lX19yaign4xi6OZk0AqIBqZ0wrlwwGcFNsO' );
define( 'SECURE_AUTH_SALT', 'WVQIkkxwxLVO7OoH0s1XBXKOzpnmKQSQAMZzXtn07hEm22YJgd9Odriy2lSnOVcT' );
define( 'LOGGED_IN_SALT',   '2Nox5J0Oorz915QYe4jtkpxYtBWLMptPm0TKx5vMYpw181h3e45v5rnDEZAk88BG' );
define( 'NONCE_SALT',       'MnxFQFk1Jzitd9X1Nz6iz9sAHqHmhWoy1FLKagIcOXbX4lN9QovrNPyaOi5mz79b' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
