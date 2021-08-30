<?php
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', 'minor');// Ce paramètre est requis pour garantir le bon traitement des mises à jour WordPress dans WordPress Toolkit. Supprimez cette ligne si l'instance WordPress n'est plus gérée par WordPress Toolkit.
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
define('DB_NAME', "klap");

/** MySQL database username */
define('DB_USER',       "root");

/** MySQL database password */
define('DB_PASSWORD',       "");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',       'VhoDi3eYB%8roCzu5@D67DO&swABt*TjRjY8sSN4pg2OupLA(AM&s1S(yD(I!8N1');
define('SECURE_AUTH_KEY',       'soF@*y9llNyyzSkJxBpp5*nxkY4kywhAnn3l6pYWOk7zz64q7rNwT(Z8@^hdiVpP');
define('LOGGED_IN_KEY',       'piTtPtKv&7APmy&x&LO))nWBUH3Vl8U1vO6mEfRm4B3njvE1bokdjGQkV3#K6YV1');
define('NONCE_KEY',       'Y)dazQ#eFTNQ*@0SXL*)HzcP)4@HQFAj))lio*2Ln&yq7xARikYUJi@0dkNpw%v2');
define('AUTH_SALT',       'FibpfUkV%eIjx3RL8Ub08pnb&fOT5S6glO*^RFpVJR#I9mqs4eUEO!*bFmfpmXPr');
define('SECURE_AUTH_SALT',       'eAJJqDKybZbEdVzJ**Q)#jWwVd5kI9eI3BBdujnY0@&E1iKS&goEYqhFReDZgC!E');
define('LOGGED_IN_SALT',       '*o22Mh2J7gKA1(GVkxWMooDaHm&nuEd3Yasp075(tvVRMHZLcAyBeykphFw3m7M#');
define('NONCE_SALT',       'RZeAOBAe9hfRdSK*K78fy)ZbAqAyNdfZqLC792T^ETKCA@KGNi&#bl*Mg841kOeC');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wILSW07gk_';

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

define ('FS_METHOD', 'direct');
