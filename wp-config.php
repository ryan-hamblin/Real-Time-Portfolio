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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'db');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'ryanhca');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'leeryan1!');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jr=p9po_Pe0nFh%Vp7iN{&Ty#EEO P4:pk&*?WpR}hwh.291`u4@DwPwp!>]_$3U');
define('SECURE_AUTH_KEY',  'Ds.nV_uwb}PJ?(3pwkmKz,UOz![8xO3o]Z=2{1:1xD*.M&o~+x%[t@+@-WTxr]7 ');
define('LOGGED_IN_KEY',    ';+ZB8q|hw:`pAoP!f.|YYsz{hk}-m63PJ9w=taO[ly(=jj3Ono<Iinl0T|?}NSv>');
define('NONCE_KEY',        '#=sRdUT*ez^n5N|,- Sjt|LFQruW2s0KUTwNS!6rH]x~Qfi<zPOtbpFP&,0AaJ>l');
define('AUTH_SALT',        '?Ag|?:>5IDMyRR{-UPU{@IW0I[7?>$(p;{qcxd1XvS!Ft$axoRQO1&|wABI*b,yq');
define('SECURE_AUTH_SALT', ',L8fES.sLm#P_T eemu?2lvPejzT7s9~&x=:Sq2(Hgu[F_7ZkMKXsHq*va&;l+7k');
define('LOGGED_IN_SALT',   'IDPM!?eeTyLC^oT(R|*  mBE__``oF{b(Qg9SUfz(fc5jWE8;Vw2uD%VW=`0KNrm');
define('NONCE_SALT',       'R2VWJfXe)s8-R{)_k.|lMX)hAEHS6F-EI;,U-`VH*ytP!4pH/Lc%l|l[q87,d8a|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
