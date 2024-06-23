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
define( 'AUTH_KEY',          'b dl9OrLT!$m;q[]Ou_oRK0f?QgBxu3Z7]nI}}+l+pPua]Qxi9L#q;UN->uC[[5:' );
define( 'SECURE_AUTH_KEY',   '`MK9{iXH5L7~mf*dfR8 #BT{=(EYz?bd^[lmLow`|[6j=lIZU^p`V5RS&iZ?WSix' );
define( 'LOGGED_IN_KEY',     'am`K@Alq6(V?oq~G}e{`f~RxPBQfT@S!yZ<sGMhlb`8EGs]qwc&),;fX+b<~ @-4' );
define( 'NONCE_KEY',         '?DOq`Smfi>RoCBZ[*Xsa6W9$!Lm&;l;51]lrAr2y&r>67.R38YbP/KALVR[wTL|%' );
define( 'AUTH_SALT',         'p1wd`?*lY_!(au8s4!+M&wpZhef,FhLrva0H%2(ByZ<veZmR!(ZwOBWZt4r{Sl,@' );
define( 'SECURE_AUTH_SALT',  'SwB;~&O-um{v,LB@+QP|ZZ[ne>=%b|K:ZHDQIj{kCZw:/ZFb1*1Mv;MAm=dV<[[@' );
define( 'LOGGED_IN_SALT',    '=(FKq>6Gx8C+iEA`v2?n]30)w!w*sDE!_J5$zzF&!w_>`37/!,)*!Sq^m4%rz83Y' );
define( 'NONCE_SALT',        '$$#R;!ZPOq;+m(_~HO)?<zXgv]-{l4$W110RXMb|43Rs:{lD>zpw5HigmZ/_Hr~{' );
define( 'WP_CACHE_KEY_SALT', '!yJSBN7D,FPnO]/t5Ia^QWDvMp*dFp4^_2jF/ZgEX~r~l}2JBVp-WC2Lw;U9uaEC' );


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
