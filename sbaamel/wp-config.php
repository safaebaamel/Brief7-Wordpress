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
define( 'DB_NAME', 'sbaamel' );

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
define( 'AUTH_KEY',         'F!I&yX$KtdY4-$4Iq{tSaK_6Y>+>.5Yz3WW3Hw#(D=((nDaX1q>g`n1|7n/~o@w_' );
define( 'SECURE_AUTH_KEY',  'DYQ%Ty5VRwn%|eTgh.h4)=faGy,4dO2LNOw${l#_bl?{h.}G%OYgbOVE]HF2-k?$' );
define( 'LOGGED_IN_KEY',    'AcdsphrXz-nycV.l$m[?#.].fz_iF07&w)y4a+5YQ&b*Sc;[f4J`[~1G_.BD7_Jx' );
define( 'NONCE_KEY',        's3Lg`cOXxWwEhWs5!c9Cjxu(&?rpKR:z;()gh09CN-ri_a$yc_3CQk*2djvRl8KR' );
define( 'AUTH_SALT',        '.H+3B8:C]{;,{Qe&LG}9tunI(DyO;:{NR,+Fb^<Q43DHBfC)<k(>P* &9k%$a;3y' );
define( 'SECURE_AUTH_SALT', 'Ao!EoZp=u(=~d_wR.$10&Lg=lPR-om? kH*WFaufwV~H*S;D8Y`s)d|  2+X`$?M' );
define( 'LOGGED_IN_SALT',   'G?3gB!%Z<uk0M~xoJEwldF7qRAbFeLL)<ITr,DtMz f3O*5158G]Wqpl_<wjki,5' );
define( 'NONCE_SALT',       'hBsp5HWfiuBaIa0FEk*d&#.;Ee.vquDpca0GT!U5C~2wv-nu(T- M^<;Kn)4d0<K' );

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
