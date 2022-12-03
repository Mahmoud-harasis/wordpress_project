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
define( 'DB_NAME', 'kitchen_world' );

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
define( 'AUTH_KEY',         'rxSqZAV{~n-&{7fuvBBxTekGP=Isd)v>[QTGpLV~%vtyO2q~2ddPdAK+48QG[Jz<' );
define( 'SECURE_AUTH_KEY',  'K)?53WP -e).Bps1 p=$(?K6_}e8I<g-G#zj&BuO3kG4-lfZFWrO$J:,R],tY{q5' );
define( 'LOGGED_IN_KEY',    'nPmjPpH XF+sF*2<j^!u7AHjp-];6sLLz<c#()OjZZQi`O<0|c9_nmu-)u%Uc^D{' );
define( 'NONCE_KEY',        'MD(6t_JJelm-x6[Gri}O&$O9`c.3B4Cf.l]4*l,-k}5. !6*Q~Yw~w#J-*&q|a~.' );
define( 'AUTH_SALT',        'Z89CglK.&;5<,JI4y@3U@_wNI[@6PMB&;{V|eN1n(f,/2](K!QtA{nk3!Z(*F{f{' );
define( 'SECURE_AUTH_SALT', 'F^|sxN=BYjQl1DdR[fAlp}y<,*klorc{Ag1rVvq2pFoe9*EL-w}{@eLuqDfQ>Tab' );
define( 'LOGGED_IN_SALT',   '~vkI?zArU_;D6[}rb]K=axUd!1MJ2?Ha!EnY~*>R0.9i@*/IcX5VY1d*fQ0N0=[B' );
define( 'NONCE_SALT',       'l?8]5n?64UsMg<>#^f$A2{|MdAnqbe=@8^];mCC|IhB&],A[#OtS&7flH wnTzHN' );

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
