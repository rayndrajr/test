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
define('AUTH_KEY',         'd0v98Nc05goMSr41N2PZqWjDYMYReDOhdXSYRTFeuHtbdGVgdSKAHavs2K2hvdKPCGdOe38X+oOuOV41qL9RFA==');
define('SECURE_AUTH_KEY',  'UN3Ejyc/N3MFdaEm8hVfc4U5emHm2ZXyxBAXdVM+khhvh0E/PWw3vPfO5QPqwf+3UyiLg0dXIQjYXQDH35Wziw==');
define('LOGGED_IN_KEY',    '40fTc6yvl3acFw7y4G0oySmn4bEyGmS8riPzj8bxNG+cFxK2CzDyJ2RR2VT3i4r5wnjH8jleBWq3LQnkv+nfTw==');
define('NONCE_KEY',        'BRKudKUJZKjFnVl2vrIV44zP8wImH0qYPrupRXNZMP584IkEa/lG799N/PlwqBpGrLoH0fuSCqw2G/dZszufoA==');
define('AUTH_SALT',        'Lo7QdyDHKngkEKEkl9eJGyIIt4Hv3fUsrUxFhS+oUWNsMnmZBryjtEEkqob5zGmpfS9TJA9i7gAaZXlRBpCcwQ==');
define('SECURE_AUTH_SALT', 'CUeEsn2ntw3pzMbqhPHRsMtjGBjWbo/k/ZPjoqXDeXb/GM5TPYTDExwhSwguO3KqvrvIhzsTuQfZIgWHbbh64w==');
define('LOGGED_IN_SALT',   'YkEEFby1ftf7B09OZ/iXz+S92vYze/d4qJBu0sP38f5NdORk6fC61EOwNCMKNjovNKvYKltsHeX0J7pXYOQ8hw==');
define('NONCE_SALT',       'GJmxbdabSWBidKuhG8e9/nTJ5kLZ6xk6HDBQiejB+XJIHwwXKv7ycUIugMChN+uXfxezArzazhxxkgTWe3SyJA==');

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
