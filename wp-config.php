<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ofcounseltn_com');

/** MySQL database username */
define('DB_USER', 'ofcounseltncom');

/** MySQL database password */
define('DB_PASSWORD', 'dkKBVJHx');

/** MySQL hostname */
define('DB_HOST', 'mysql.ofcounseltn.com');

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
define('AUTH_KEY',         'j~dlr`UNJ8d1b&wB@?c8MC(Nfg!rQC|kJT+gH"PCtKkqVa/gT5h^JOmp;(EuC1nV');
define('SECURE_AUTH_KEY',  'CNcV;MN$a4"o4H9_KW;JW"Aq|?)JaX5ioCdRsL;pOd(jJ|gRJ?ow"mffWWh2Sre9');
define('LOGGED_IN_KEY',    't|e(5*SNHy4eYo@4VB&"Gtp@i|/u^bu~a!H$7%u27fb?!3AB`2%z2t0;YJuZK+L#');
define('NONCE_KEY',        'x?FtGi*m4_)a5G~hLoSDEaJhFqYAqm^ff8$!u8/aB@c?)BC1zg0f;tumx%7oDo):');
define('AUTH_SALT',        'b!?sVuO#+6JT_G:E|ohr)szjOdTm7l5*j&6CU6)mFga1q!Dp~`e?~1VKn!~6&fy?');
define('SECURE_AUTH_SALT', 'rD&E~Hh:sI05L)(RHBNDiJ|XnONtN3IIR%QL*:lC46WMx?ZGgPwGX0gn"Ce(^Jcd');
define('LOGGED_IN_SALT',   '_^*Ck;uv?j~km9:nBFqp"!pHxD)vnURe%Mw2as7~"0e6DHnFblSaRKaV~&Y%+T6o');
define('NONCE_SALT',       'U77(qpN~UJD?x8GctHCS05^I5Kf%3SIcbdw?i^Q*M"Mdow_zP(&GJ6wXu+$BiSL_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_smzpra_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

