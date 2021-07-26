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
define( 'DB_NAME', 'lightup' );

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
define( 'AUTH_KEY',         ';;uc]l%l2ZA,O*Xpv=51XyGAu3=+Jrvju[0DT+IE%FE)[NFbj3l0o8vCtg;4Cwr_' );
define( 'SECURE_AUTH_KEY',  '@*T3t(%VLX8AAZ?SX-SG[dR|q)],NTy|s2Pz>@W!PPBUj?>R1~)wJljZr%?u;s#f' );
define( 'LOGGED_IN_KEY',    'kbM`1Inb&S]C`cQ+U~8eJ>aZ-(rvS;aE3JX_DPHb_l{JMaBjlvoepx2c8T;M@Gdb' );
define( 'NONCE_KEY',        'BC.%`S6KqzVx?4<;Ep(O~.+&4GJL{A6oI)oP)HLz1Js=-h`SeFON2vJ3g)2/k.~D' );
define( 'AUTH_SALT',        'w_P38$g~N!il|jm<F]{y.)#2M}&gOy&u&NQmZ.d0`3esTL?peyL#X:OJMu1!5eO?' );
define( 'SECURE_AUTH_SALT', 'R %/I!kIkZ5!o9g`DYkUPhY4xV9/X7pL0h.&Jn!+2E:bi-;R!o9qQGm89_WOahj4' );
define( 'LOGGED_IN_SALT',   'Ku.$!5vU*8kRbK|B]:$Dj=]VXbIK) s<_`G2g]f}0Zt4gh}p>-0Y,nsfVxb}c{-8' );
define( 'NONCE_SALT',       '=zsB&4s+SNSG{bu22uDM;$oXYCTWf}fK3Y>D),kK/ADtBV~FWmFGFF@rJk1.(GJD' );

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
