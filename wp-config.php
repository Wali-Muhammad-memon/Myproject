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
define( 'AUTH_KEY',         'be6)t$WG^gC3z1?a!QY;5p,CB~}K2=LBs>Chq]dWnAlCcdt_E$rq0 $X:x,2=ofQ' );
define( 'SECURE_AUTH_KEY',  '^S}Ms_#5EAE$5%in4-6rFBGRL~[2}ByL }}$zFmlZRz@&V]b?;V cPCO_Yk Ip9i' );
define( 'LOGGED_IN_KEY',    '$_*QWynJV$R&%rBg^j0Mt4OhaXWR*&P3]WjYY..5J4=@;>go0^fnw}paeZ3%^3^8' );
define( 'NONCE_KEY',        'Xre7uHYdri6f,2S9iI$?_q2+vqHY&G)NF7~/~Lww0>z,v`&5-ib 9vHva{aDx+GK' );
define( 'AUTH_SALT',        'I-y8MBZLwS_%l!kh$9*`.n#i0w-lOYErDT)C0u|K6*0p?W_ns3MRdIz:[Ls}_]+]' );
define( 'SECURE_AUTH_SALT', '|LMqwMT-TLdT7jUf6$g/1bVa>d`S@&%g-IM_E61# &F0=dIIpx+*Fg7j]br#pY8.' );
define( 'LOGGED_IN_SALT',   '.SAao89w42 BHS(8PatK+V[et;aU8X`vyzrboy]MWbcG;+hjG_yo jhD>do}.K)C' );
define( 'NONCE_SALT',       '!(L@{<esNVe>,P2f~Z*Bc>89Ivv<%Q}p?WFTXS~i%x]oIp&BaZO_AJip <<1kvpD' );

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
