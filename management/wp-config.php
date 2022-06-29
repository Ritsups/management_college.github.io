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
define( 'DB_NAME', 'management' );

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
define( 'AUTH_KEY',         ']&j} $^J.C)&`+,)/+hPj0o1#}=K^71i@&M1Z5oTWAWoU$1^sm9R.4;;VYz#N=n<' );
define( 'SECURE_AUTH_KEY',  'qUEs^_POr8GcyE^p+6A vFsiUJ[rQK@1{i,LepK{ P>zu#u/[ y01di+5ur*7|iK' );
define( 'LOGGED_IN_KEY',    'w}db$/*,3I|%a&cRoVn;;uSj4N%8$*3 P2#Dn_`*qCZGSQN~/`u/524/LCBa(v$h' );
define( 'NONCE_KEY',        '/3P;~emL_MHAbQp[.eMt~$|P|Fu+R&oE^FRrh47BOtcyB@RX|tL=xSoRc2B93[u7' );
define( 'AUTH_SALT',        'b&0x+^AN%W}[NQv9cGHj-<):ug7D>D}0Z]}?G~L8D.@XKPpr6=Hm^UM8tenl(.?|' );
define( 'SECURE_AUTH_SALT', 'X){G/}Fb}F{Ab]`.{j!~]br<mAoZ{#P8$v(vy^z6F8z}%(Ggd<vi{(PR_)VlH~SC' );
define( 'LOGGED_IN_SALT',   'n2ajV{c8L%X7G:hsee!R^feNc7Pt//~D7XS3HFy/Uu6*qLy~-pl.axbSu%GHCMVw' );
define( 'NONCE_SALT',       'la7uAr@He,*!6)D*T|,swODD{VeWapRbUJ^OR!ST}FlIAFIH:y)uLzqh%<_E,WGZ' );

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
