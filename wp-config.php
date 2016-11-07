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
define('DB_NAME', 'ebpo_portfolio');

/** MySQL database username */
define('DB_USER', 'ebpo_portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'Z5XpHY3L');

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
define('AUTH_KEY', 'KBmfn41uo4DKKnJjEpzmBH3wiUpIjbn4pZ18NDf02cLxMJTjXvOM8zRZtuRGaTGV');
define('SECURE_AUTH_KEY', 'p7hDKqdK7i1QSsTK0TsVMJoZ5f9iYjpM3U2ZyT658UnHvTNvQMJag0voK69E2yfj');
define('LOGGED_IN_KEY', '9WrkqHnP6sPsj1yYUXnDSHNZSIzAbjUDtxEHsnwBsBDyrRYT1tXsPtNBm344oydv');
define('NONCE_KEY', 'WmPzpqmtdbi9wxaTv7tNGNUVVOC5uDHJWLoAIQi7PuDe0TY2SXz0McGFoSDVsvhd');
define('AUTH_SALT', '5vs0LolFfh6zsm6Slusd215E16RUeBMw2fytJY8cvL86ODiLGS6fhUyBuRHme6xP');
define('SECURE_AUTH_SALT', 'zbgQQZ73P1Etj1PU20MhtzwWbRo2M9UR8HdPhlseQhdx5YjR1ztkWcY2whoZoZq0');
define('LOGGED_IN_SALT', '6MNXAaoD5BpF7Rzg3eManGCL48V8vTgQQOFsBkBIOPajt2SJG0Euv3hV9HOumMu9');
define('NONCE_SALT', 'tuI78BHD3LAQYxLYmz6lZ2dkL30xgw8XNfsPHotGrf8MddkFKkDsW6vpxDaHMdUT');

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
