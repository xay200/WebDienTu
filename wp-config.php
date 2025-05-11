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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WebDienTu' );

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
define( 'AUTH_KEY',         '9/[v|(!?l~@`.XDyS6pQR?cTY6?D(&=V3p].iT.zKO&YL(TRYvQ5$Tk%uV/gtB@7' );
define( 'SECURE_AUTH_KEY',  'g;2Hd$vJ%km@5ZP{;v{qCmYwIp`SLZN2H$Pp![nK&Ir%1sWjA-T.Gfa&Ht%i^dZ1' );
define( 'LOGGED_IN_KEY',    '+os=/. !%R66&vrbmmR90g<,=7 nd1_o4eZoFwapI5jyZ^q4^nPlY##TJAS ?^Aw' );
define( 'NONCE_KEY',        'y^CK#x?vlS vRVAlww~>&z2j;JBkF!4 +]F2o_e{}jc.R7,(Z{?U=q$2Vc#sND;}' );
define( 'AUTH_SALT',        'EE6p5~F1mH<G+MF-[-oX74$$gE}KZ$s5qjSWwf:Uu~)o;24t8>dM&aliA),gXvGG' );
define( 'SECURE_AUTH_SALT', 'Nw7{~YP7e>?3z+iBM5ztt`QqP,nRq3x&}_8H>U[W,zfPy@!|yu`_@0S;d0FNYEdi' );
define( 'LOGGED_IN_SALT',   'g)[H/cA`I+xfQ}73QEBw2Xsf))CSUb7ANrx9X+zq:V9n+MM}LESiF1tR.(Bid5HY' );
define( 'NONCE_SALT',       '8i0(5I5D-_J7H16^^0@y-v8;&cLTRFx,hDGZ.1g_!~9O`YNWQbVHt=?}}LkG_$2Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_webdt';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
