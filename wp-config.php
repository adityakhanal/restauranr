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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         'WEkPSg]y{gQnzYP(my4%,S6>E/<@!#O=6VIfmx#t~|FG[PUO4(b*b^Gt|I!1z?9*' );
define( 'SECURE_AUTH_KEY',  'EN8(Z(y!/y0RJ|j~u_qrVVaE8AcFp%;#?A>O^MMfFtp7.p@X7,6gz9HCR[rJs=bf' );
define( 'LOGGED_IN_KEY',    'IndWdU,y2_{q{{rl-T ,=]A+(I%uz(bm7FpQOf.%bO{0/AAez.V*>?+yjR+MAc%B' );
define( 'NONCE_KEY',        'M;_w?67^&+UB)KI|Ap^!}:;zKwxP5qqL@ 4:2:u5EP:*Fky7-iudxAdxMWHoF f9' );
define( 'AUTH_SALT',        '%gs9MQFg.tedC.<y5,1b%w0ov`zrLDmly^Ey?)vjKoftcDkI~42(SHUFU;za {A(' );
define( 'SECURE_AUTH_SALT', ']{6 gw*wzSh~n2E1F1{Z$$}8>*_.edY<@Jl#PCFL :w`* xN}x;}*1fi?g`Wne:X' );
define( 'LOGGED_IN_SALT',   '[,D4Xh@DwE/>I,(rl<+xW}RB-b.RZnv4^a/b+u90(7^o71S+Moj8}H]zelsK4$Ox' );
define( 'NONCE_SALT',       'atb<u}aK)^y(<i_*3A8)%oM4%L)^]7H}q+tndGC!wpE!YOn3a,Rl$cYl{L,rqhJ{' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG',true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
