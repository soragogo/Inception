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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '!V}>H9G^-Z;NY1(PYaK6d >q~.W2&gTzIfIx2Nz/Tnj,R<9zdXidHqbcNICr L)S' );
define( 'SECURE_AUTH_KEY',   ' a5m$KmzL2szAuTJ/#ac]v#lIR}e~NyzATfQWBvDR36Vg!FQ4CZVl=FAZ$4P1r{Y' );
define( 'LOGGED_IN_KEY',     'y}M(dRr*RQ`jjPlu}PHRs1jhotDlNuhsbDz4x!R%9ODL~vNz8WLA.ON]{>1<y;F)' );
define( 'NONCE_KEY',         '4iRA6QoI~% eZ,Djc>.~91+s5]22^p~Kh%([8nHz59~Yd,^XR u0;24otb1Y9%U?' );
define( 'AUTH_SALT',         ' }&TqjrU#N4rL%dvr`KPD[xkUF=hbfe,oaie|Uyj@JJaQ<H8G1T11tMTReg e-_c' );
define( 'SECURE_AUTH_SALT',  'QQUtu+jMutblL+h:;wSg|/{n?!Gb_|0IRKl~(2QnMoL6>y!w_FOO~Yi/3ir0l(/Y' );
define( 'LOGGED_IN_SALT',    'I8*jcb1d6M!w;*E`XJ*BQ)l*&qX^ad/@?Gn<(hwp~e>S&2 fc(0;qV4PPl8,Emp-' );
define( 'NONCE_SALT',        'x,!I5s&ASis2*g,E0L0r$)NQ[+}6sEJHxXXHJzq~>|3k#$d)IdaMP8:yV8jdCE c' );
define( 'WP_CACHE_KEY_SALT', ')8o6=20B<^6b{u}~7edTwL~xaa3Xn]Oo2374ks_~BLA`OPE5~]-p7h*Tv$y{6^A[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
