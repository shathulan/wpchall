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
define( 'DB_NAME', 'chall' );

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
define( 'AUTH_KEY',         'Av~sY9WaFIs?Yz%T^O&q,{baF{IN.*a}DFNQ]B2-686fet+-KeTc<NPK%(;CH0;E' );
define( 'SECURE_AUTH_KEY',  'vU7lYet94#jvfF46SoL{mR;QxYZo,# 19J*<nT@z[~jHld[eaE>B50vve^6jDXk0' );
define( 'LOGGED_IN_KEY',    'xU&AciG{*:zH!BUCSK^5Tk?`_[!%Z:x=_gh]AlLoX]IQTxOZ|pe:@lBb]i`cwY=&' );
define( 'NONCE_KEY',        '|49OSqA]y<}7u!Va}=b^jAI0h+:}C4*X82ECN9B2WJ~LY5tWlDGk/_{gUi~k7_-T' );
define( 'AUTH_SALT',        '5K6  ~da6s@!Yf(H]{C``2W4iIq=31]fyNV*h{1Th$aY&2_i$2Y&C p-DuJ 30wc' );
define( 'SECURE_AUTH_SALT', 'NJONGzUl)H4lr>YOspE}7%u((cDx</b=n.9|K{6WZ_3W&zdRCM~+I?lwVT3%+</f' );
define( 'LOGGED_IN_SALT',   'P?1$(5&DWi~%[J3m4Pcb<c^hg415{%_]DB(nj&+R[>IcVkg)g*wfb]xHft{+!t)M' );
define( 'NONCE_SALT',       'sf&Y[!BWr9(s#=gCUVHk91fD)D^iM4*GC46[2`&%_Vhc|vnF1!@<R= 2(Ec`!<AM' );

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
