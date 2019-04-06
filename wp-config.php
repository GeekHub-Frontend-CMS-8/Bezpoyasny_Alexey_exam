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
define('DB_NAME', 'mitalent');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '$UoHCvM2V[iL41c>+j:_V ,QtbhGby&6pjyUdN.5JemA*Y*+vziSG5CP%3XNYLzv');
define('SECURE_AUTH_KEY',  'vn:|$MrPY6K? ,/QwWP~+YfCUb(J0k,*l1QJocV$~U^mhKa.S<a{.e6;8-k/Cnu&');
define('LOGGED_IN_KEY',    'o`_ac<iTr#.|6=&TR[AXC89#x)K<LBRW:4++YZOb*#/g7q?zEiU[)fCtwexN~ne,');
define('NONCE_KEY',        ' p[/ZS;TNc O/vfUh3|A6We?ZrQ{!ZO2sPrQgn{V4OxD>@Rd?8C8wM/!vchj_PP;');
define('AUTH_SALT',        '>86v{j*q^=W^#c>L:y[3|7CL/4kS2pZsJm-$8`L,Q,$D`m,*w+x<6LPEd#ar,Ra:');
define('SECURE_AUTH_SALT', 'q6xzlRGf Dxw88b}UOek$s![d6UG^mN8C5 DMU ,mn[D2Ny&k/$bK:rFuhP>N%29');
define('LOGGED_IN_SALT',   'v dAvY*`o$21g^~UyvBqmK)n]&-/lUNO~~*^}9LcD{@m.Hbn2U9w@`W$w2eB<vG$');
define('NONCE_SALT',       'Ic)t$B=WY1%r}dgO3{y$a4]:FH93O.Ml*I-/ng*+Yw=VT:rtXxk7Sw]{R|pt}w#t');

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
