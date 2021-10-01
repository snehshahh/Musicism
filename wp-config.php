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
define( 'AUTH_KEY',         'E+DJL0TDd5_)!n9SQS<):i2B|9~!uZ xRN:8];/9-@RWyrj6?)-v/Q*%#8j6#dyn' );
define( 'SECURE_AUTH_KEY',  '$mrq2HG*/ L,=!Yv~W*OTl`dB{^*6ceOk?oWI4IR?A$_aODqOt2V~ez41=8Y--zR' );
define( 'LOGGED_IN_KEY',    'MrTOA#K|bU>NC ^_ e^-6(Rc3fy66xsM9_2x:Gfw|o{ 3CW^f4c1sJU[*d3dgj.m' );
define( 'NONCE_KEY',        'C=8_!>Z4q$LXI_j#bwef+_lh^zjVaZ>Nd~Y Qwx]cO<f<sZ9]*6:>kS+IHt6OqkI' );
define( 'AUTH_SALT',        'OTwXgWqo;n`@ K<_OV!*o8GDlovT!Y(8eg>[dyJW5c=o 6-WT5H.1yMo|Y4sL(NC' );
define( 'SECURE_AUTH_SALT', 'E9`Tsm~gW=STF=pm(ehmb-Y4E[TxhOjy@h+h2*aMm4au6-*SS_0KOv2^FN2hAcNx' );
define( 'LOGGED_IN_SALT',   'D2J+/{+m7uqk]6B&f|oxQ_(KAR:Koux`$q=B.CqvB5_/244(xRWN3aTSLCi>y~55' );
define( 'NONCE_SALT',       'h`sJ;*>du}8b6R[$8TJZ0.`b}Opk}[@AwVC8?r.{|gX9R2=uTh#]ki<J4XY%A@RO' );

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
