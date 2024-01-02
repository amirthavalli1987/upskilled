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
define( 'DB_NAME', 'upskilled_db' );

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
define( 'AUTH_KEY',         '8w;xHIH3s$Pyz:sOfoqXZs.lwZRoQG%yK(YHdPe6j.Qv<(v5wA;rttr>En=|G|{|' );
define( 'SECURE_AUTH_KEY',  '/A4(k{m?mhzbUm2djctQ}B+v.|-ic63Xq1v6,X25:e~/s&:sg[*n<U_}Ed5kT.-h' );
define( 'LOGGED_IN_KEY',    'V[,GHA>UgmMHI-2 9dbQs-OnY[N[jN1Y}%!a^eFA-LAeBXB;!q!GLP[$W:svs!,P' );
define( 'NONCE_KEY',        '<;vSnr:O[gj_hBKVfRrNu;;JpGlA:dz56TA7O.dT)yg!Iz3YV+GNq@L%*5*Mn=;^' );
define( 'AUTH_SALT',        'J(tX.$@;9,4j#0c_3Y5R28i Q1]_&R^:@[Yc!<Aw.v<hp):..j8!?n`$@#fT/P1>' );
define( 'SECURE_AUTH_SALT', 'S>qX=Rt5Po |iRPwC)zGJ 2D2<*U+$b0.]Agc!B<e~iQQzlkGvB$3-c/rC-/q#Qw' );
define( 'LOGGED_IN_SALT',   '.Pw;t[Z2AKj~O3fr>tst?dnpt:Gifnf{%hiHHe%7?$3/7Imvn|1r$E*xxU.-sS5x' );
define( 'NONCE_SALT',       '-A(-!Or[_d(Rn~$#xB.]WK#=}nM`iF8O>IzShpROh12V9`*zF#/c[@RY{o}X+|EF' );

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
