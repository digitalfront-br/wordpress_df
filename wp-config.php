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
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FM5C4FRyHdieHfoAwyDVUk1ThvcmscgHD/jLsw/j9cfoJUM6I/yGoWtbNeuGFVDIj6LrYgz1bFZcoEJCQWEL4A==');
define('SECURE_AUTH_KEY',  'k1Ie+eHTqXjhF21qnOIawX6Iqr1774a5prBx8Bz5bVDKCkTvx2HIyQqppWnkfHPBIDTZL0dAcxlK6+uAOkE5GQ==');
define('LOGGED_IN_KEY',    '1CgOky3gTPxQkZPXKZSx1r6n5+7dZAPacM5nPc56K2L/LRZIxsCXoCdDaeP2XU4ghwwqXDiArHjb5s4AlWY39A==');
define('NONCE_KEY',        'QD0Q46/Zby3SQLox39EFGgb0i7LEqP2xy3IAMBCSNk9D4qTMd07sQUejeqww3h87/e+c8L/oEoZVg5Y5fvqjxQ==');
define('AUTH_SALT',        'skcFN8VUitGutLzwAErQmZlxTM9zQiZ+LVYTvsLVs5r96ExKonBWGaH2h2AbTWLRBhryKb/1NPnV3vlVPa7VTg==');
define('SECURE_AUTH_SALT', 'gvB74sIxtA6l2TVSXcW8UyM+YqFursXqulJK0GXktopnxz+wNwURem5sHtbVMTVf5WR0dUCpaAidZxBvHP/eBg==');
define('LOGGED_IN_SALT',   '9V/9A6PohQ+MhfJeaaTPXORxeest5qijOxIcAvio17e+RmyYNAc2HWBxKP7gbtZPOYn9RFoQ9uBPHiTZPPZXcA==');
define('NONCE_SALT',       'SC26GTZE0uxiF11vZcLrWx59pyt4XyCoHneEp0eozecLh6rw4NJU5F8rG6OksF3r1rt7FRFmoKs7VdL9+PJlYQ==');
define('JWT_AUTH_SECRET_KEY', '|@ke>{AmzysAd+3KxO}E5z)ik=c1c#%(`h0CWp= P~mz&pg6|Nax4Sgw%J]aHtQE');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
