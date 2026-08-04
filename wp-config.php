<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'montañas_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'OZ4C ~7ovfcgtpY)S?O3*n<QZxwd&3^yaUcm1W|LnL@zvtIY{(DN`]>2D+)b!jWA' );
define( 'SECURE_AUTH_KEY',  '&3oN]c`bs:(22vt3SVa#w>oR5_ET2:.:[qRh~<UJ2MH-c|UsxQ7KZcx-ORI>[Ya{' );
define( 'LOGGED_IN_KEY',    '0%XfbQB]alny6QA]4S;[4cP15(@(f82F4xOkBr~a_#8!HeoD$kb[b`sFhAjxYI.?' );
define( 'NONCE_KEY',        '%7P7t6rE :L8(SZ<2zVbX8K=/]_!a5!# Mk5B>TO|%MV[yQ.T/D3hN/I/kiKEI`6' );
define( 'AUTH_SALT',        '#dY .`XX}}Om#z8AOJy @e/]+l=u1;{epC_,.SBHC{eD^sWb9Bby`#oxy4|-LmnV' );
define( 'SECURE_AUTH_SALT', '5M[Z-W{}oY?<n;vl|.~6-?fmB-C,U`PgCjW{EYfuwtPCnb$EgefAG+#3$%C1eR_R' );
define( 'LOGGED_IN_SALT',   '=}/ N>lgN+D6MPAv[=qu1K2jOAV[=HfkP0@lv,( u|kfn;{}Fv_0xY2M@<TeJQ,y' );
define( 'NONCE_SALT',       'Z{}gNLe(jHl=^E9Py4f?AB^&?puI!#P%%Z;qV4])>,#e/D`C7kqCRPPp5B1<156E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
