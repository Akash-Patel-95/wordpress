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
define( 'DB_NAME', 'wp_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+0L0!uwk&w+Ot:Xg8ysbx#f2W5YV~n%+#FJ-&R!xz8$~`G]+L?zI=K{a{Su9j05s' );
define( 'SECURE_AUTH_KEY',  'E%Ou/^63aRvzki2}$FO#]HlR~&H $Uy3r%Qrwvb2Q~[P(O_?7qK,cS.v5I!,oZ9I' );
define( 'LOGGED_IN_KEY',    'fe&,PD|&7Gj!cTa~<ZAoPLMgv+Ne%xYZbYL{#bs?WDEh-$JUlsDdlMWq@fRIeG@=' );
define( 'NONCE_KEY',        '2;Ck3?$K7n:$,Yzem)HEt%q%%>@/ KRM5||Rlp6.d-{)RZ#NA&uY~=Y{Eu$$=,Va' );
define( 'AUTH_SALT',        'HX2yJN$Vel?8^xm}@y{*-pY+~:kJLv{8ly~s#BJ|rDCgn,Q,GSKL3@W9L]>|TL4H' );
define( 'SECURE_AUTH_SALT', '>4.MBQWg:T!C~yJvIa4NfB*)4^Qk2%/Hk7y}JTVcqA#yi)U:Z5ibT[=by{NX8*+9' );
define( 'LOGGED_IN_SALT',   'nY+d`J%i+emXAJa|Youq0&,Oi#+Fc9I7c%iUFw,f#8F[VL<qU^ |m#4=%Xrk&o?m' );
define( 'NONCE_SALT',       'y70|dwJQSZ]LDQ_Z$n1VFfidc8!aK]Y6I99I@`MZMh$wqqxng|h[Ay2G[T)6n`h+' );

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
