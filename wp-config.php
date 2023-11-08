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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'X(~~.Yec}hxEFvrtc#;PemwTf9!?JD[:qQ{=g[N@][Sl$8gZ@MsD2n}ExBj5=tj~' );
define( 'SECURE_AUTH_KEY',  '3oX^J.:KI%Hg5k`WZ7R+]dGEdv$.5dV [5-VXZOcjKlhqJRM11mC%{VrvWe1}~z&' );
define( 'LOGGED_IN_KEY',    'a>PU.GNRFQ@>y*BBGA6yi+T+l:&>MFh)RB[r>Q;t1Ddx0[A6ZrcE>frKV^YXM*tq' );
define( 'NONCE_KEY',        'NmC<JKQ!}`dRirquz2R.R,]j)*LI[>8$,B|oTOz:)7=9Ojb?#9-u 41.)KePGvXS' );
define( 'AUTH_SALT',        '{[9oefI}S3t^zzGsCPMQ`@KT[MJg]~u?1XaDG)%jE|T7qujH.>=R(g$!Z/YyZJNw' );
define( 'SECURE_AUTH_SALT', 'h&dB<HC +wNi]sn9sd0Tuwm6h_vA=m9m0zFvJ@Oi]d :E0yGmZOQL qXO_{e`@12' );
define( 'LOGGED_IN_SALT',   '/Oq*S^`7dP~Mue/1p)<V]O9~*{cu8XAQyrJb4W5nwMc]}u~3LOEv@-5r(ArpZ]jL' );
define( 'NONCE_SALT',       'Qr<2H@@2u-$Khe^J~We7%$uTZ 5iFR%j.Bi[lBELr)6qWkFS5/}{V^$;MY!0^lf!' );

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
