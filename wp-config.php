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
define( 'DB_NAME', 'brittney' );

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
define( 'AUTH_KEY',         'j47fj`fy@I~pvF(R%GRD>8SQHb)GZmiGs7#5wXK|J!EW^RX#]9Uo$(o#LW(ypxYL' );
define( 'SECURE_AUTH_KEY',  '{;F8I&5~jw[q~$?p5^t@u?=P)@kC1P2+->(r<6zNCS[0Dg4uR3)D72.-94d;]HL=' );
define( 'LOGGED_IN_KEY',    'pO0`RoQIB7,=P^k=8kgbdOEWFu<0IFWF1p>-&[nJAhH#lDK;GYv8O^EqSPZ?(X3W' );
define( 'NONCE_KEY',        ',{}Q7u 7[F_lMAj.Tw1eG7HB9Qa|mw.q>st]^5MHpa^YD9oITc?*{&hLfg],h^vC' );
define( 'AUTH_SALT',        'vEN/@{=u}IE+Qn03w</CH8QDVk]7{<I6vO/n[.k03l|e3b3We+[n!x2TdVrz;(Rv' );
define( 'SECURE_AUTH_SALT', '~ntmoxX0PL|?$-vA!O`?1R0Zv+fPA,!xR1E{*XA9d^J[(N!*%?TX S8pGxMZ6}:d' );
define( 'LOGGED_IN_SALT',   '}=RE,,|#{%I8~3l,$6Bg>^}NwOOlf8?1M810C#55(vGzL}rVFeS*On/KIHmyn7H(' );
define( 'NONCE_SALT',       'R1RRj!b|{8ntTLz|p0*r8<X{)hMPs#>&Z@O1J+xGl&r,KS+n(`LPkN9x#2%8>8@Z' );

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
