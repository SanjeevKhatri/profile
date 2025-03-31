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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk16/2523899/www/sanjeevkhatri.com.np/wp/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '2523899_wpressce7618bc' );

/** Database username */
define( 'DB_USER', '2523899_wpressce7618bc' );

/** Database password */
define( 'DB_PASSWORD', 'qUwyq_Qrkgmt0TsQgHZxRWCmcBz4OMEP' );

/** Database hostname */
define( 'DB_HOST', 'fdb13.runhosting.com' );

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
define( 'AUTH_KEY',         'MU`F0bAFpF6xLhR1.J2V_9jzyt&a^/XwU[gJMe*pWNc#F(JT_Yt7K!XtClazb9Kx' );
define( 'SECURE_AUTH_KEY',  'JnlEuF&dt*Nx.U0ImxH_>v&$/K`kcC16d_B]y?zX97{|vcZVpXM?q*c1:8Llu|CM' );
define( 'LOGGED_IN_KEY',    '!az-O>o5SQJ)z+kd 7su_^fqDeSu_[4*:?JAYpuSLCfvi;v=Q^.^5s6|C/;x:Z.+' );
define( 'NONCE_KEY',        't3~/ozXJ2/O)g@1C$WAW-VB~zD*;gLl6: z6_|FY_1]#LMQNhO}*9jjHki D ?io' );
define( 'AUTH_SALT',        'q!]1x[W-g-OR/d`JS&w/TR7fI[X;L-(w0E-Q(Slpjk?[ypeAY+D#5Q*{1zhs+_Z_' );
define( 'SECURE_AUTH_SALT', 'FHo.#y`dt?K.CkK1$mN(}%]c)`C:u<ul >[>i~p[&i,=C8HZP5p0{nVI0P&g,;F ' );
define( 'LOGGED_IN_SALT',   'D1i_:?WWMrahQS]whs01&5LtJNbI=NNWechO0C NW96X~xz#SWDZ;l(pPA7QRbu#' );
define( 'NONCE_SALT',       '%fx>rdG.[Z_?XrfdvUsEzR1KdWUr9;h+vdha~=-I1rHcB7q,/;7!zN9IjEddi}L>' );

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
