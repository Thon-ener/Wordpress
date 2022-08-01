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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myDb' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'OP*[p*oF20bT/-QW%u;9m4fycOio$:no]zRNXZ!p+uSdIWaml0DDrrQ:]ZALe9lj' );
define( 'SECURE_AUTH_KEY',  'a] $YcXvE;NH4E/05+kGml3P$L0V@V}P]We_1p}Q$cP9Po@ctV@=Z|_EJ(byaF5/' );
define( 'LOGGED_IN_KEY',    '`hp=;d*2XT~~]wO#0.O]dt0K0Du,sUegwjWU$oTbTLM6t?xE>C29-`XF`;_/~n&W' );
define( 'NONCE_KEY',        '195}_51)x;32t:vK buFGDR`iE7$*jev/l92;xU)Ow4DyN@j?Q%_|fd0_v7p61+|' );
define( 'AUTH_SALT',        '*B}*c}BImD;@Jhr3GZa&LI>?YX;N:$^5e-.7XamSq;+$)OKkK]/`P&7gP9JlssF<' );
define( 'SECURE_AUTH_SALT', 'u54fhso3_{ !77?$=mPvoXje7*2dzK=-S!}XziZt.7A5}61h>MQKhx~@w_7`d~zh' );
define( 'LOGGED_IN_SALT',   'EKL)nW)l0F5xlszHNm>0DuN0S6]l0|9n82,Gg#h}t6K6E?K$!hP}zDB;Le[b}|lz' );
define( 'NONCE_SALT',       '!y%T~i4Nltyr@JeJ=D`1Zg9hd>)~@VVZ:5h)J}B%|hms%fZ*@%5<P_Z6Zb`KHSu%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
