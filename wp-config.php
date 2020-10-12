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
define( 'DB_NAME', 'restApi' );

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
define( 'AUTH_KEY',         '-B`x> nF/q<BL*v]bgnty=|;$sxG-`pK5}!<<lp@!Wn?s(:tyJH3WsUyd=64F43T' );
define( 'SECURE_AUTH_KEY',  'N-FWc?;yjxg!H|N&cT7$lf3#)F!8ZtD+,gliKsZP_?:v;Deaa#rvA1t@rjYjGf~f' );
define( 'LOGGED_IN_KEY',    'aK7R9$$a}f))@joOhHVbT8HbLi(6_u%?j >W}WP8PDi-jQfwnxU~x V)l+CP]E5Z' );
define( 'NONCE_KEY',        '-dJyt@jGLQkv{oVC5pa{H=!bb1c*LptU%XL;1#&CLK.(=3oQ9eF/6<j*V]B1&$b<' );
define( 'AUTH_SALT',        'ug{F].LJdXQZU$@0ox7g<Ak>#,];mph;^+b/}1|R: ZcbH%VQpr`xka_,{=5Q>O-' );
define( 'SECURE_AUTH_SALT', 'DD{6|#,-UgPRhzA=oO[Oq@0a$3g-BlZ%arlOJY%&3HPs=G8-HhQ XgdB;4/{#*DQ' );
define( 'LOGGED_IN_SALT',   'cWK<}Z%1|L0a_Ok>AEKgj.Cpo 8lx8[5U@/<Q*_6E.z$%xnL**BZ%9Xz,_g7Fs{G' );
define( 'NONCE_SALT',       '+REj$L{0aUk A[HA}j7=aMKe&d*f^?dtdh#(nY.u0Elgt;*a3/hs([8j?EPL8+s)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'i_';

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
