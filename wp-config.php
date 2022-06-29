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
define( 'DB_NAME', 'abhinav' );

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
define( 'AUTH_KEY',         'ow9T?m_6X4!LqS-xYBiM*?2b^?q|]B~:<}HivZY<Z1}$ca.0a*?s.j~!)+U-YX`x' );
define( 'SECURE_AUTH_KEY',  '}4CdKfupIsx1&$}qgu&anBs$CR>-~/{*W&LF$%Zko9,Mb%u/0z4,qCl<{GU0M-Nz' );
define( 'LOGGED_IN_KEY',    ',Gs,inlk>Q>~@ll86=#H;!!OJ*zEN cZG<(cKVoBGiS@k^v54|5Z</n)TZ=mWy#4' );
define( 'NONCE_KEY',        'J?2cvW#,`wy3TUB+I^3K$A0b.o.&N_/fYmAT&R)3S#I~N`jxW21qFB_-asbAMj<j' );
define( 'AUTH_SALT',        'dc6)4!T/)h2}]&xShs@;Bs25:X>cc#H2bj<A^?q&K,ULsJ% b8UF-H43jtMJ%}65' );
define( 'SECURE_AUTH_SALT', 'Q?e(VX#`TpNSb0D q0/#*v lH+Zq!e6V*IM_FR3TW5Yxv~)?YgPdb<53we,Yzzsi' );
define( 'LOGGED_IN_SALT',   'IxH}9Zv+I lby5!${}6Z5]N?+koFk*MUG)rt*Tj=H6w?fVEJBt,= h8Bet<>8w3&' );
define( 'NONCE_SALT',       'c*%X4i^~=+d~#LhQF|Xs1F~Wp;da,C},K=tN/-PnHp;PE^HiMW@bt/&_Fwakqhr]' );

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
