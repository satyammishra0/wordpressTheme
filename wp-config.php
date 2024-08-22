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
define( 'DB_NAME', 'database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '-TG}M.<Zg.XEXd6VB6T?CV47Otx=wkkCXP^6;$TP}z8f6*&)&N,wfTd;/!Y]V]Q5' );
define( 'SECURE_AUTH_KEY',  'tBfA^~e2 62pGLE:>oWa[m?$*eXrY0![mMo:O9!}<^s~d(O +pL9EwvA|Gu>MHbD' );
define( 'LOGGED_IN_KEY',    '4h=B)8_p=7`>=s9Dx]G,5(*vpx0[=eNE1EYLGM6*l9%{[35q8;Z&XWPxErYIlMH&' );
define( 'NONCE_KEY',        'lEtV91s^@tK|r2BVtc|<,y7?9 u8A1.`1I9CVKxe#LC_|dP^!w|O!*&H5;5<btPN' );
define( 'AUTH_SALT',        'cpYplyC-H#3DY{$T T1Rgh=tood;MYh97z|F8mv74iby8k.yz|!.e9gPVgLxY|Vp' );
define( 'SECURE_AUTH_SALT', 'uN8u,V!~-|o QnqRD6Q2iWNeK+NN>hV/jl^o$`Z;Q|n=$(<|:`LykI%duy}V4e m' );
define( 'LOGGED_IN_SALT',   'zEZslfYjJ%YsWW6] yu{BeQgu7l9U[uB3:tcAF/oo|Pp,WG5J.h{PC,+w_?dkoCw' );
define( 'NONCE_SALT',       '41B=<,EQgK?7L%0`F=?`Mygfz?-T/,r9/vK /+{BC3f]IoYZWH]kxJ-kw[Yj|$4L' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
