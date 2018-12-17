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
define('DB_NAME', 'mylanding');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';8wS~?rDu <U#jI-;S8e;6biJwF3+]ap^=ezI;e ~F)VSvD73:Ls0$Y&Z/?7<ZZ-');
define('SECURE_AUTH_KEY',  'NO6~f0bQOg+oj>u?jC;6j_.vZSP,,rtVF)ZMEh1JN-BImL/V{/qI4WAW<PpAfQiD');
define('LOGGED_IN_KEY',    'SM:v(sr7N[?{7mLqrs)A;iX(TT%+qBGtLw{WTqu88t/-NWv44>k<Hp$p)!PORt^=');
define('NONCE_KEY',        '6O$zG+*RmxuM[Uv*>bh)0NQ@tXm,r:|I1M;]+ctN`}NL{3A;Sb?)_OiXxwRf|{_<');
define('AUTH_SALT',        'xLT:!@z@fc|n+R>JZ]YE>W_En_j|I|lNZruC4#@Gn4h;esu_c2JfR=n8*+S,XU1.');
define('SECURE_AUTH_SALT', '^mMNC!b4Puv;Hi9aXj/G!UI(mem|4f2Z.%Cg)^dMN0N;wZS1*A=2{JQ{b@#Mipm@');
define('LOGGED_IN_SALT',   'g;>42ml&TrQW3$y[La]J>T<oN,6CJhm~Npp0Tp +IyMs~V*TPC_<;C[3M]zW,9mQ');
define('NONCE_SALT',       '(C3.X7Xl(NV9,w%!RjmaPHZ%W9zL] `.g%vYx^tRw&__}h4dl`98*2zR^Y{X-`v}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
