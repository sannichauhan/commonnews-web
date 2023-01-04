<?php
define( 'WP_CACHE', true ); // Added by WP Rocket


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u427314151_BQHm1' );

/** Database username */
define( 'DB_USER', 'u427314151_zTAU8' );

/** Database password */
define( 'DB_PASSWORD', '47t3M0YiLj' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|~Zv=0<q;J!8]NiOlQRQ4-McVzoG~wO^E];DC;}pH9!owi@QbwBZn{ND`3n-2y{Z' );
define( 'SECURE_AUTH_KEY',   '@}/FB$Kc,l/mrFhJ!u4:*jP<PuHnch3AS2:Z8BZ8ecVQ>_GGwm5WUT7SW,e.Dx&f' );
define( 'LOGGED_IN_KEY',     'DB{g`qKL..aJ8nmO&!eC4W.H,f1 LvKk4JqJHFa]10${yiiriVO?Tz>*K=!5SE4x' );
define( 'NONCE_KEY',         'T9~pW.@S8sq|SVtbytsmG|`,RS[9(QT]m4IPO+0J741!sgK*$U5]_*Dd^&Vh7Ex@' );
define( 'AUTH_SALT',         'feI{6N-Jg$ v{LsQe6A?U`4RW/l@6hCm%+1yz2NqZ|ijf(li_G-9Yn?E9Nmi?SBh' );
define( 'SECURE_AUTH_SALT',  ')m+Z!)a>>k}HDss/$0)0;E|jc+[Z,gb,Hsoz,/HTOSD6&~omC,VeW_~M[jx+|0bp' );
define( 'LOGGED_IN_SALT',    '>hfWd/%B3B]Fb*>Fye-=c#!mUc7]%IK!EVG,dOd_R+];4)?:@?fB5ir|_HD3#cxl' );
define( 'NONCE_SALT',        ';ySi!PLQoGZ`06{uO|i#8n;V,k@W (B^e|=y}FWsdl8VkcICdczfrlc^PyqKt@5n' );
define( 'WP_CACHE_KEY_SALT', '!vFunagT C~gd@[3s5qu:HD@Otti-BIh>L(q 8ii3(E;-W;2%p`P&+n[(vObxHyu' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
