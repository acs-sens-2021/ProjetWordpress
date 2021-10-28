<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'pascalp_phonestore' );

/** MySQL database username */
define( 'DB_USER', 'pascalp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nF7X07oE1gzEnQ==' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'I(HKKqL}d?M NAEwKXlq=]ORvjgE7DIKl]70gS^q/{-;klk`%k!Suc+<-)gGExnp' );
define( 'SECURE_AUTH_KEY',  '!8p$ q<:kw5hF:t5d$AAK2s|]^E4,vc(OWAppVR3gD=~|g.73,8#,Bi94+~[MR}o' );
define( 'LOGGED_IN_KEY',    ';rJ QE5`%?9`}*Q}KVZhj>bdIH+PyYrCgRI?UBce[On+S>:Dc^Ql2t!v|+Y`=<gK' );
define( 'NONCE_KEY',        '<0_0X/xiuB1!d 8/~R~t-`B23tMtjug@}U.?QM1uHla2vMABc&GwGR)rCD{#].%8' );
define( 'AUTH_SALT',        '4nwPscWUY4AaDJ/ ?}4txMkdO<aH4O[Puz|CSP#OqE-4Xltrn<{>sqTdG;sXq|u!' );
define( 'SECURE_AUTH_SALT', 'f@rei:(>7}lOcoL%krs%EoI:X*<=xyQvS$@=7./R&]w;xf19IdfnVp*<EqXz^AiS' );
define( 'LOGGED_IN_SALT',   '~z`b SJ{zH^B/t!!8kP/b=Q>t;7.WDf:%DgW|5B%d<(P7M8?SWd~*^3ju K&Sj|s' );
define( 'NONCE_SALT',       '_V.lV%}OT%viWb@~*^@$5^PV9>!_Uwevd0*M9b(Mos^-nGFf&[.{/3*YNinejv[%' );

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
