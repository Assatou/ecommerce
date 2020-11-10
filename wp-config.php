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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'SZJ! &$V}%ytVRxU$tXI,<0J]MQG~p6B0QINOMDo3n~Mrh}6|j)^ALn3EI3}=AP{' );
define( 'SECURE_AUTH_KEY',  'Jw]G1EjcHp=o!gU`n4vKn}~bJX1]QY+6d#0d-V9^+^fZ~fV?fRvmYEiaY+o<x:(`' );
define( 'LOGGED_IN_KEY',    '3pzorejC~fm:c?6;~7?Q;qtmH3@H|%-^HXVx{a7nAF0cYT;:LA8}aYWSqcy(=SpY' );
define( 'NONCE_KEY',        'I{qyhfO&q4E7Go=^%/@/$]#K;Z$~}du<4fThnrn%2mWM?%5<V-g)KWh}z( dkFXG' );
define( 'AUTH_SALT',        '{^m_hT:CY9ICv9(w/jSBHp;mJtsp/Qk^g8}F+ywRZC4d@$(CrqH*A~.a5y:|.mf8' );
define( 'SECURE_AUTH_SALT', '/8l]&Fnda20/ TELvEuvc{}wZ{oX7~:tt3cFuP:G~}+` jUH7ZmH3bj_ga5o)8tQ' );
define( 'LOGGED_IN_SALT',   'Xq8|+nl]G3*AI#CBe}FYSQ:N2n&~mr^aFK}M>]7?d6!!{_rq)33FOO6fA*j/LW_(' );
define( 'NONCE_SALT',       ':IRVF$eQO]m`CNlyW#:bWs7?Q7-8tK/]du`o%2-v0RJ90{I5LCo-/Qg5w{xzQR>i' );

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
