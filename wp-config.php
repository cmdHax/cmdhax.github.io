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
define( 'AUTH_KEY',         'm?fSsKae_sc:gDn|)|,?7 9(Z@[in*BsqbMT^q1$p{![7%WO@$kX:IbH}0}N46p1' );
define( 'SECURE_AUTH_KEY',  '<D(*Z8+|(9dp;QITYan{1FLtYn.]B1qc+hjoz<QnHwf{^Cg(=45a?)V*t4:w9&SE' );
define( 'LOGGED_IN_KEY',    '<>9&]U`c+?KwX*xjss1 }CO1XH(5O?|f0D;ZGqtjqs5`uV^?=ucQ,KSq~CXsp1l_' );
define( 'NONCE_KEY',        '*dZi{SQY`5;j%Wr~O-g^L=^~[<-}5aw:aO:~]ScI3gCd kD`m(zDiBPNSdB[}A+M' );
define( 'AUTH_SALT',        '0G23{omGCg6Z+R^/EL?H:l1]2,}]N<)C9MFB`,z)^,j[mVcR(Z8Gvet`*}yEP&5T' );
define( 'SECURE_AUTH_SALT', 'i:-3+Ekd`}h|c,EcKJ`CnSl|vTWEK07K)Cwo8<h(htcFHC2Y#FBV~yV1}IK.Rv+6' );
define( 'LOGGED_IN_SALT',   'EsI(h}lMufX2-cTz~!#6|;B_p84J1TJ#n0|eeIs.cv%GJ8T*XnQ,3J(Q<]Uw-Cpz' );
define( 'NONCE_SALT',       '[/ec4xFVAuO{Y_6&2BtOU4ua5|a~-BH_$&)MD$^W;qVchukcAyZNrA|%hhd{N:PV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ch_';

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
