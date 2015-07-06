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
	define('DB_NAME', 'realtimeportfolio');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'realtimeport');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'Leeryan1!');
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
define('AUTH_KEY',         ']Bo%Dh:yjT+m{)m!Q=Dg0XTc|%s+W3AT,fk[:x|s:+?xiC|?*Zg7qt,[2Y-b><v#');
define('SECURE_AUTH_KEY',  'W`W!D,7[SRW{kLh@}]kLT`LTFNlH8p1~_CB>n!bBfVM`m$^V:6+CtK&vi62|F1J;');
define('LOGGED_IN_KEY',    'zMvD#9+(Kst|YD88=H?1M.GsdJ>Q2bPWc`B|_(M50Z,kCk+n ]d(leKm,|t;v_/!');
define('NONCE_KEY',        'leqg93JQjxSuW[d* !:4%hSG68hP{ly%vn!S}^=Cf4a?>DAL;YrGF!-$df+ {_r(');
define('AUTH_SALT',        '_2<3,6t#.!Yxg3&G_G#IELr{*G[J|IX__H4mTKI>Eo~i OQ=OT0FOG|`-~$Twc%}');
define('SECURE_AUTH_SALT', '`~hITebNO)NaG|2j1pj+EA>_||hd+3AskkpDlvtq]0}g{y(b*TS#x<:O?%;-y|V:');
define('LOGGED_IN_SALT',   '~`01gA`*-dlr!A;U9tSwa-VU-GOGDZ+>x_gc4~BLiL.L93J:=3]||$y.d+R6i~by');
define('NONCE_SALT',       'NFUWcdwoYfA|nOyQ^#??7JeAMC!%Nv:eE[!Fu-W7I2$UHbKbKPJ@JvUEg+;#Xc( ');

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
