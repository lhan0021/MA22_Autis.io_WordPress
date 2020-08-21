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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2^ AoT#2T#LWbP.>@gme$]mYFkBOU*/_)X;C:SF1Vy}@p4!4d!I$*ZSmwFx?9Tu2' );
define( 'SECURE_AUTH_KEY',  'i!4lymMtiYipZAe:^W=V3z(};OML+g2d*KsRxMz2})d&9T>HXuH#[HT,7OGFY#b;' );
define( 'LOGGED_IN_KEY',    '/Gr]_8:;R=*v%!*]1H,hP_aoFs%Wv|.ti3m8`1g`j<xrmiFDx-j:x-jT8)}:OL0s' );
define( 'NONCE_KEY',        '1&<j?9<{S6],T9.&Jl|got8.~|V#y6HBDs5Wc<3PB8MuM6o4pU;Q^Vi;84{bp2{_' );
define( 'AUTH_SALT',        'tNi$51?At9$H|&<(^$Bvo]npyJeVF;Vls1jq*i=!U9}W5t}QDtX6t:|+0MFD I&2' );
define( 'SECURE_AUTH_SALT', '=h7Ei=M pQIk31;]U1`n&:Jm<Pfz:Aa[D`f%7{~`l(N2)I?&=U`ZN<ye-rYifHA_' );
define( 'LOGGED_IN_SALT',   '~(D!Pu*PMJrfxN=s>]EA`sH3Tv@Tf<]Y|XSf&ry?9t}N.I)0|wO{cE!gOu_6UzHe' );
define( 'NONCE_SALT',       '*@797_ml#LkN-8ie4&jM`?7hWu0qUf[A`_n/0^utij5?1)}h(&h@g_sdvZTLfb~5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
