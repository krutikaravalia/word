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
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<|Y|1<@10_ys3SOY+sOWRsF5zO`%h[?7VIjZJq!Wep/v;vz@LBLey6B7?^h2uJ<^' );
define( 'SECURE_AUTH_KEY',  'ydI&lO!K-N.|]oRP-#PiGo&Lw#jUP%F9B9 `h6S9I::z:Vk>CPv=r|LL&xUc&AC2' );
define( 'LOGGED_IN_KEY',    ':75&I947aKp{xmUE|AE=+`C1-@#!:,4Dy3%7KRv5+V!:}%BNB`Cu.@o0Y[itCJFE' );
define( 'NONCE_KEY',        'Ty.^>8rkC>Y+)G3p P r`w7&(%tw1Ij/3H4h2Avh_{22pT%P!)CY%N(_04e$-{x>' );
define( 'AUTH_SALT',        '!Z-?3@Y@G D42c5&OUJvc0[rh,]v.ET~;E?PzogXJ N-;+{3+>I[ZINeVKS)v>P[' );
define( 'SECURE_AUTH_SALT', '%TpOWR86QoA4hw+j39Fi/!.#cRSA)zEU,*VxBUZus~FX&LXB/PQ{&7tt5I1+[`xs' );
define( 'LOGGED_IN_SALT',   'D6$GOXPqFpOt}u/j6nq#zN3-Rv$*Ou,e*=Nmp=Y6FW#Oej(m`&Ga/6=AQHWd!8Hf' );
define( 'NONCE_SALT',       'ix);q]M6l[,fx.*USltbJ$VId[,j#GvWHAHwD!fT`3;k|/?2RRLAC~<82* _AfkD' );

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
