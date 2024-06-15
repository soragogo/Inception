<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'ekamada' );

/** Database password */
define( 'DB_PASSWORD', 'correcthorsebatterystaple' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '!kD<XpF^2e%6{~7+8=b615&1ZP%JUd.4b]]L&=s<P,IqA!@<>-`$~YdR`{kkI&L9' );
define( 'SECURE_AUTH_KEY',  'd=fXqEY6jzBhI zb5kDt~6dJnm6Lh0VYij5(ldlk!k>|Mi6M?Sr2XU_G?2QwhHUR' );
define( 'LOGGED_IN_KEY',    '!u%$7{iX<(hF1`)JM&2qu</CXk?RSceU}[h2VL9[-cFo+J~7N%ok+[ l!!OtlHG{' );
define( 'NONCE_KEY',        'm`00UvE4{D[8{fVaNX @^YAn^cN@H/)CiRZ.lsF$5>*s6@Ypz(y*#?PaOe<}JQ?L' );
define( 'AUTH_SALT',        'z[0V^/K~+c?cttILZ|Hf#ft F$,0n-OR|xU+ga}q,6-Ul[~hTr)4TBy=z9e}cBiG' );
define( 'SECURE_AUTH_SALT', ')OF2A|@46V4!tH<!3p>`1M{6l} sl+N)_%`z2>2MWx/j0I_T+@j@(fO`nAjLYkeI' );
define( 'LOGGED_IN_SALT',   'FIaz}>2u N<B[n`Zo/*?Amcs8cl?9cD|o0(YJ5U sn~`o/!kjG6Dwi@Z+Jc=DZe*' );
define( 'NONCE_SALT',       'n<F71?PTDhWD_JXJa~K$&3Y0%zmFTo}xn:9S78wf{ Dz*dvmOMuQ*<0$D:6m0cmP' );

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
