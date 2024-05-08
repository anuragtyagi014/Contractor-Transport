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
define( 'DB_NAME', 'dbiheslglqpdug' );

/** Database username */
define( 'DB_USER', 'u8hnmdaxqui0e' );

/** Database password */
define( 'DB_PASSWORD', 'mgolc1omxzhb' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'u<^+-}+TYoFREj1%p_Ejkopc3vQY-5k%7{=;EFyXF$##pGBm>9}t?uoh$<JYHEL8' );
define( 'SECURE_AUTH_KEY',   'zVEF:L@(O$7 #bh!D2<BP_4w/dmxQ&vn)drt)^^9IlI-,`,lNL4m7-Vu5j`uF5Lo' );
define( 'LOGGED_IN_KEY',     'kU8us@IE0JfXq)}f-yl5#>}w9<qt;_<h6.>w,hpz.U#`j[#62q</P<qNHLpeq8)-' );
define( 'NONCE_KEY',         'BMinO#Wt:R-Kc$EYAwyXMWf(Xz9=jb5]C9!1.u* t-K<;[U[Er$edz`1k7?Emc:.' );
define( 'AUTH_SALT',         '1A]}LrsEPpgbCLLlT}p]]LI@`*Dr`y:X(.$<brxO,RZ]6OY6WQ5bF/_:s_/L4p)N' );
define( 'SECURE_AUTH_SALT',  'GJMi}rQGH(v[W]@D3=/&yf7W}W`;d!1BJt%7BDK%}Dnwk&9<qR$XTppw31=Xk{(/' );
define( 'LOGGED_IN_SALT',    'F% j)lr9$S.Gz#QGE.T2xl|DWubi(!M%(|Ue(J]BBQc6y2pWrw,!e.w(VRRPk+8Z' );
define( 'NONCE_SALT',        'oBTs&654dnIH.M% =M[ek9<Bx-%&.;Z4pu3<C7v2{9`OtLzdW1dy) 7ZV)j-:kwm' );
define( 'WP_CACHE_KEY_SALT', 'Lb`A<1y#a4P4b>AcOvE$R4}OFMW{Ls.EV:5z}w$@CR6v?*{`G[IY5?@,ELO}3n21' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dmm_';


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
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
