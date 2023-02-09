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
define( 'DB_NAME', 'gitdockerdemo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Creole@123' );

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
define( 'AUTH_KEY',         '4)O^=safo)lYNu;k+($ Q25OO].:0>@><Mov!*W:.uVq+*9}DTEvtX1%LX4PTcs}' );
define( 'SECURE_AUTH_KEY',  'O!V}J/z.+4ci)_x)3#MKzlp353j12Dlw(MMU1?0 nO_4 ~[2tw,64}Nemg+?>>SS' );
define( 'LOGGED_IN_KEY',    '*CH.k.n+?pxK@.!JLe(8$0VbL5(.$o(o 9Tb@A23<H5:Nrtm9ZsTumStWyf~&f#g' );
define( 'NONCE_KEY',        '#Hs3!JacjljW9t1FFNK}}t5[*mv]*aI+!n.o/w=X5:XxCY[T80.5Bz+tnyzj;:[T' );
define( 'AUTH_SALT',        ']Bu+4~L80H2j$8u^ReBb_k=rYS(o<clwj0`[49gxS`(I.c&<^7TDPhv1i+@OSy<i' );
define( 'SECURE_AUTH_SALT', 'nLEz;54#+t|rTc3Ls.ZTKpN}=7R$N1-[P@w]&K`IZ|RjY]0Vv=+@FJ4h^y@d%E=i' );
define( 'LOGGED_IN_SALT',   'x[xF9Plz:}sjaTmSz@nSA_~SpdYKW0n03Qu)N~(p]91xd{/fGQaX-2NK`t$&MhD+' );
define( 'NONCE_SALT',       's`[.RB@I&yJ9]:$aHVV?i^JYI~R(yeFJ.]rt+4%1T?u5ZB%S3$qHC0=Jg},B/):d' );

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

