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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'light-2019' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '2697bfbf2b5e60ace46b659556' );

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
define( 'AUTH_KEY',         '9E>$B;W0-.)=GZ*,uAd/?A)7Eh3tYbBPVJ9c>Mok|GXH.@{SaK,,}v3%PlMA@0c4' );
define( 'SECURE_AUTH_KEY',  'dR8cC{]xyK!af ;lV/_pxT}SXYaBvO?<yJ0rW:#S8oHzpZd`FUhh$e9AjUPC/)oM' );
define( 'LOGGED_IN_KEY',    'L} pfVxb 81LlH4UNsZ[2l)}+vkGy2o%)lX{2T<-Al>Q&y5x3,;Z_G2C`b8!88Lz' );
define( 'NONCE_KEY',        'Dgw2:..(s0C}y,/?&H|VS^2q)Qc/UPZj4$Qqc2vS-/T?akHmK*q}2k.6/CTbZIaE' );
define( 'AUTH_SALT',        'ysor)YE0Pq?T@;s{}Ul/S+^Czi4q{P(#bNi_4j6[#)k]v%l4Jv[Ss(ZRZ)@+Qi~+' );
define( 'SECURE_AUTH_SALT', '~n5{3/nK<r!L[{m~BdJ:?}V|PSe^Ja`l<>-j&pqk!x.+GMe#3_1S|:!4PHfvRzW9' );
define( 'LOGGED_IN_SALT',   '$%L71J8^e,Ht%qu.ZkpQ8h#XpXB[Vv*?_;@KE|wtLW= <5A2%@`w1Q7iuyD]a97f' );
define( 'NONCE_SALT',       'm1F)cfDW74/->Np,6wu6cf$Z2CN=v%O-;_iBq+Id|Z )TIq8xh:4!2{:[;|45K#e' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
