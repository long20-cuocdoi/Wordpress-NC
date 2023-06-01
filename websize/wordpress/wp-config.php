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
define( 'DB_NAME', 'websize' );

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
define( 'AUTH_KEY',         '.ksU46JJ<LqXvb,8Tx/_8Y9Nd=( *$P/T3Fv,3~-wJUuZ~<b^@:Uz5 R60q2H:bd' );
define( 'SECURE_AUTH_KEY',  'F!U3+`RuT&T._=Rf#dAD$c=;%pX-Cz1fc8C2732%mwnce>u)9i.zO#O`G4CB;Zm-' );
define( 'LOGGED_IN_KEY',    '/+y;NtnAIEzPZD*q;&]l]fz8USTdr<g2@`w+X/Or0Xw7/no3M`;qu:XS:r7XyA@n' );
define( 'NONCE_KEY',        'E+9zhv)Mc6Eu%85:S#Bjv7/Av]v^)5c -w56{;~.6x}XO}pcMC]3n6KVpKZaeon&' );
define( 'AUTH_SALT',        '-~<CoL]@!^F$/Y[.=&m1#KbT}a;,X!W4KvjNcb6eEXwF{>pxh8Z8U< (>qtX,WI$' );
define( 'SECURE_AUTH_SALT', 'c:Go!+gi5**FsYz:Jy.B<k[H>E>V@7?m7k/B$++(9L=L[0y wlTED`>4+*UJ^>i.' );
define( 'LOGGED_IN_SALT',   'I0|~|]0i#E4WNp|Pz<)jm$w!Sh0#PkK#>pj;4)]VkfJ[2w6+l@3Y#ppJlA5sme.|' );
define( 'NONCE_SALT',       'cb3UU;Ou8aDQ69%3t!Xp_>.oq$Z./)5*$q!lLmDiENnWU^%X0?[pPVhAhqK.NM4R' );

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
