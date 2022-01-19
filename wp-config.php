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
define( 'DB_NAME', 'us' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':]I@C`D}dg#y3W)8C~PKW7:uq%b]c)#|sAwmv/fu|V%ZC_xg{]D?)I0Q.|]=S?%W' );
define( 'SECURE_AUTH_KEY',  'dS2z=T&SY2&CaQcm961,k@KM7=ii>thA+-?c%m?:dHDj|UK<%m1aYuW9*!+Pz&FI' );
define( 'LOGGED_IN_KEY',    '6ilwXNC/@GJ99&82rsx#tf:qXvm>VQ$^r9tb;`VSn4851DKCvm;f3Qlz)1EQ&X4Z' );
define( 'NONCE_KEY',        '8gjOY.F,oUA(!0LaM-|%V;+/{)7b&D//n~cIn9>6F_`R2[(Z=v+eFh ldAZ|mNXe' );
define( 'AUTH_SALT',        'sHk??=?52xrX~N dS!tg|)g3YPg1q; j8ZZ>QqsVyfA)^HcZf]evXA*SVt5h7MYf' );
define( 'SECURE_AUTH_SALT', '&7j5Ud58yEJqr#1HZ2&yd)kw9BJm(;;h7t%t1oC]&wKlgR7f:f!Qml0JHdTZqzD/' );
define( 'LOGGED_IN_SALT',   ']WxOkAZ:A<S9!y3+[H o8n+K*jqHmBrwB5Z!+<`hn@ThKuEwy_$g+R4NLQ|;7Zb#' );
define( 'NONCE_SALT',       '0V5rVaaCmIUZ`}GSjfkRLGcAj`Yd;5:07A<$Es/24TZqM6=Slzlp]]J%x^uh3CZ7' );

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
