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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'travel_agency' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ';E[H,ix.9/EfYyjj$MIlHi<l|GdQaqV3(EAGyX=rP,eh^9Lq9<{)HT/v*M{qXlH_' );
define( 'SECURE_AUTH_KEY',  'GbhWXl!rj2{~XTa`G dv_]g~5IH++P(2+;G6H}nK]]+&h+==Q$U@+E.9WBd+t<Y@' );
define( 'LOGGED_IN_KEY',    '|JN(_Nb)T&nu,L^5^8PolTW}$?^RdOC%m4CKmX5)FKXo]uTn*rqQE)ddB=V5<P7}' );
define( 'NONCE_KEY',        'fj&kZ6VCg^kG`:hG_|~xYWy@5b_iQK`$cee6[rsbrOO{@]|len.BJ2C9jRj|S(Q<' );
define( 'AUTH_SALT',        'f!+UJ:Y#m&J8E>;F$tH,Y(3fk?rBYIK=Gq2){;8rRo:-7iq1M1bx)~_Z{&H8-Vk1' );
define( 'SECURE_AUTH_SALT', '}wSc$0%0Z,FW}4ISN()fXmU,7&<T|AxoL_B{Zx=k;ztAKgHi-#^H6kG}J}e5Ph3[' );
define( 'LOGGED_IN_SALT',   '6lBvyj=>0lYa#yO(wrRpt@)/#DsCOu,D*Ta]XBm@4##;}_q;k6z#KAsm:(x=u,]m' );
define( 'NONCE_SALT',       'r<9fuf`.wMWvggrwH(jSaYP_6;kuF&%i5+~S$1R^Jtka5!:zE:|w&>Q)!fDH%g<}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
