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
define('AUTH_KEY',         'CCrl1owLivg6ZOwlIeXQGS+ov5BHMZOmU1r6d9IZ8dSBkOgwJ/7ddhO9U1P039a+Y/UJHs83RRatcjOOfuztvA==');
define('SECURE_AUTH_KEY',  'YE3nTu/7Xc4rZYRRYnFFk8mwJlDKt/Qd1HjziQ6TeMiiHEGO3fh354NiASWclPeFPlCFrXurtvfyup3ATVph2w==');
define('LOGGED_IN_KEY',    'bTWyYOiJOj0ZTqMcF2/eoNWOGz16gCMAlZZxxot3xlInLTlj5LzeBa/ltN/H0/LIX05qkeYpmvaKJDTnlIk5Mw==');
define('NONCE_KEY',        'I9g9Vq7hOYu8WoF38pJHzI+0cThvFVT1FVUwQaTBHp0ldARhQ+GdUFVS1ATDSDeycvgR56PfZ5m+0FEf4yPzQA==');
define('AUTH_SALT',        'Uu/21urV3CCrC5tz5rbBxVt3Aw0sPWtGH27R+rEn1mWsyEFfcSsywnCkIBxD9kzcplHgr5nHE7tBMnxULgcE5g==');
define('SECURE_AUTH_SALT', 'xttOtIB9E0HEbw+7mb8vSV3mnFg3VyYyZF2t4zAtAHrljzvGiTeBzFG/TTuMyERpzu5DvyQFOOmKpAupdMXw4w==');
define('LOGGED_IN_SALT',   'ht3VnFe75PiN/hzJbOiOJA0fnIKtktRG5hqKkH6Cd4E81GnhfXTrG8iWlzEzpr/ayGVl7sxPgJ9aeB0ay5Fcgg==');
define('NONCE_SALT',       'QatW+ihvsFBWq0rKy8vU0psCWQyW/YYW+CQE8lbQXC2nxyqjjDY2EXs78LnTLjAaCsqkpLDrNmEqG3LqZ/FSOQ==');

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
