<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '3e8cdf5c75');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY', '967a5b760ccfdb6a1e6aa631eb06afe7e796080c672a44d2e551215d86a60a49');
define('SECURE_AUTH_KEY', '2b9cb4238af893566e4e4ef3b1bcf70164d2a926f1bfae6d3dae0347125a6a6b');
define('LOGGED_IN_KEY', '78d959b9a13a7fb7a8c540927c89173106078647bf743a104cd33d9973fb8439');
define('NONCE_KEY', 'c1738538267cd561b0cebc5fdaa6c8e729a9915dcd17645f5b673885ca79970d');
define('AUTH_SALT', 'bc04c756c46455f8d9d889b5bf2d798bfe98cb69ca32b859a457db09fd96e53b');
define('SECURE_AUTH_SALT', '1d6f85710e79af3706119b0301c24c807f71577ad838685548d50aeac9ebdf07');
define('LOGGED_IN_SALT', 'bfd438954ea1c2942fd84013eb326b762b5706632f68fe9ea20c1248f02eb3cd');
define('NONCE_SALT', '864239b04b0898b0f9110c943dba198f770c099c3ed2e0fcf36612363d9b8f06');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


define('FS_METHOD', 'ftpext');
define('FTP_BASE', '/opt/bitnami/apps/wordpress/htdocs/');
define('FTP_USER', 'bitnamiftp');
define('FTP_PASS', '6JAy9Mb3DmFJ5qSpCLe6hiHKmKWA4uGCvvrSjEpLMuB81jkvCC');
define('FTP_HOST', '127.0.0.1');
define('FTP_SSL', false);

