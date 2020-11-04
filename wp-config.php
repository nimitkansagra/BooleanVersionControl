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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'booleanweb_wp174' );

/** MySQL database username */
define( 'DB_USER', 'booleanweb_wp174' );

/** MySQL database password */
define( 'DB_PASSWORD', 'da.@p5i59S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j99cnbzvaqpfljkfcjvfsbyswkmd56qdr2ex83ca9pjiiecdbspn3mhe7ef5qy5w' );
define( 'SECURE_AUTH_KEY',  'ur40yetsipfzb5j8wd4geqbssnf5ofkburtisvewjdu5n3wabbqaluaezfjbgjrl' );
define( 'LOGGED_IN_KEY',    'cnhjscqgqpb1o5m4co23rmvbqjppzlkfcsxot2zrjjlliyx5v136d7idrsmykvwz' );
define( 'NONCE_KEY',        'qfvkkmqz4vngc7izpavhgqvtm1lg1ygmyhrojbud4xlapshcehlcbelcpekb52gd' );
define( 'AUTH_SALT',        '0imdykzza7hqfjurcdxp7ddjbsg0njzt0nayn6xyx4pnuqubynufy0v55kvmqp40' );
define( 'SECURE_AUTH_SALT', 'vhgoyrjsowakgckyw1uya6wj8diprdbpphfkomygx2cv3jwipfdsyyiblekjafaq' );
define( 'LOGGED_IN_SALT',   'aektebgx187dfwkfl3t26mva8iai2uldkfaklvgh0ov6s3qhqgafwctttry20tva' );
define( 'NONCE_SALT',       'stafel62bgkuwneboieqnqf8calw9wflzt6ydtv4b0ytsgor8zs57jfl8vvkgbet' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpog_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
