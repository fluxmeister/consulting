<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vektorwe_cons' );

/** Database username */
define( 'DB_USER', 'vektorwe_cons' );

/** Database password */
define( 'DB_PASSWORD', '8]3AF4]p8S' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_SITEURL', 'http://consulting.local/' );

define( 'WP_HOME', 'http://consulting.local/' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'czmz0ypcv6iasbyqj9aecbasuzn7dnhayrnezexhbc8z2dbep3xw0ffo3azohmod' );
define( 'SECURE_AUTH_KEY',  'mogoel36fpm0sqtpm4ksi7kdg7jynawlihvmyehwdit0ti2fnop4ealjy3jo8hs6' );
define( 'LOGGED_IN_KEY',    '6ihf7xuukrhmdbde9ebru4o1jivjbtsrt8apn5tlqejmee4whgolejyomctx39i3' );
define( 'NONCE_KEY',        '7udhzhsoqlrrzwfpdca4smxifmmyvmyj4djzpv2kas2vdtcsvjknkiyx9djckeij' );
define( 'AUTH_SALT',        'n8pefyqquctaxl2brpqdt7qzqrfuqqvuq5xrnfddp8gled5g8shr8j9eaex6iezh' );
define( 'SECURE_AUTH_SALT', 'jvbxgmelr7rsn80pvd0xvlxqm0tt5zvlh04pu2cykkvlw3s4ebip3e0i2xzxx4ew' );
define( 'LOGGED_IN_SALT',   '1veadgw6aegzsxusjsunzzrpkzv7rlm7kcj5v6sdq0dv06enqgsi8fzhtqlsyjka' );
define( 'NONCE_SALT',       'uod7jqyxfhth75s75spdi71encc6znnbw3xf9bpaooxnt0biajdbly4dpcfaqguq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cons_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
