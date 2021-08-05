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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Zj9oglivdOFGJyk5nHnQrOsiH1hqMC+yVKZmg3l1sqWsxl7lz6XwMisVjlkUpJyMWgNuhGCeGi3BUUz7xmq/hw==');
define('SECURE_AUTH_KEY',  'vH8UBNU8EmYnOQE67HLci/y6lrmh/LZ62Gd1mi0XI75P/xCZsihPBCcJ7FWqE82gTuqvoKYjUM6j0fOacEzJNA==');
define('LOGGED_IN_KEY',    'HRF1mg+gy+aPlYDftAsW/Yoi0LJrEa+F2OrOsilXxC2v+HKRiMMyxguCYQE8BC/JKSn/z/+7seRNFxxKSmGRuQ==');
define('NONCE_KEY',        '/50CVaKETcbVCTt5AertdEcx3Dj82RSyWcV4NLry9Cb22YBf/NLKnx7IDLzIM+zYAhQ7zIO8fKJitVFu9LbGlA==');
define('AUTH_SALT',        'tYg2qTXAoxOdBCa4susltdl4rtF+if7pTQa8IZRs+Ln81kHLVF6LLJ/ZajvYUOa9m2lgK/tqDHU7D+gcleoBPQ==');
define('SECURE_AUTH_SALT', '9hxzlEMhPMcvBHd5S4RWH4maOnUIMPk0Lw0olJ+4wBhHCAsx0AnsdGbRW+Kz/iJOZ0UgwzG3wsUEQ3Ry0WoycQ==');
define('LOGGED_IN_SALT',   'YUk1+B2R483zZtzaDN8HbXRnD9xD/PU5QLT1YYQ+IumV0ZusyM1GVjTOl95D3BckzJClFdeaMFPsOAZhK6czbA==');
define('NONCE_SALT',       'xti+9b7v9ratMTE1r7lOu0gr5g0oMCnZLh3ES8YzvZ/gwqSrXdGq1MKcKzwfBic04GeYdyLIOQGbFH9829oBlw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
