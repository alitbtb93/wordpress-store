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
define( 'DB_NAME', 'hassan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '(q`WBXXL7]oJ-%^x3C%]yA>0bxhC{DH]cLrfjF|HqTJXvmI}?UJ{D!tNGw4Ys=]c' );
define( 'SECURE_AUTH_KEY',  '6C%%cT?|A|I_(E4=fK!fo1Nk}<~`6pXwGEcY}~z>5UMYiq2%w]+]hj1rf^%`uxuj' );
define( 'LOGGED_IN_KEY',    '`r8&QX(YyUeWM]ZKJ)woVkB:jjorL:$hrkI nqdi[iLye%(9hgM+k~|?Z#LeosmD' );
define( 'NONCE_KEY',        'h,f$/h 1hHB;I:i.c>HY>#Gq<X~[!.} 2qV-x~3B :^X;#P/)w9Yj4/W4^/qo3XL' );
define( 'AUTH_SALT',        '|a6$H.&gTqO{o?bvz_^XX%9JA9P]CXZ|c%v?3ioF?Q+)R2<iVFbe{_d?E_w0$OwD' );
define( 'SECURE_AUTH_SALT', 'hex}YvKz&,-a*XPL!O`*/h_g(7_>YPm32OK]ye8r^C|qxqi%3$OGwF0C*-1p9~2,' );
define( 'LOGGED_IN_SALT',   'GzOvL}HkAB^H{|80@&lLMxLa3Afy ?y$jDyZZ|6N )CfvPzY]F1<iIFKpM(^6%w1' );
define( 'NONCE_SALT',       '@x)bIq,i=DO f6?P?Y-(qwK9[5X7(#Kidq >20Wxu<{zS1xJ*}p+IvQuj[JKiK5g' );

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
