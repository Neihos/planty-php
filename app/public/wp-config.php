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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'i;PUjB>xZ~9Y+a0)/z<n-=M>wIOJ_NtQySez3KLK|DE.sX6YbI(~HA)?sRVI~`jU' );
define( 'SECURE_AUTH_KEY',   'R9jcHJwq*Wu^d3S*Z.b5_}_O+-0?|aUhK#nc/lHA!qG_lPFHl*gb:H+XJ&K0p2u&' );
define( 'LOGGED_IN_KEY',     'p#dD1VLtll0y<!BN|-OG.ZQ6^E8=rk(])pZY(kb8U6&WI7zs+|Uc8 oAz4~l|RCQ' );
define( 'NONCE_KEY',         'LC91G9vXs~X=M?bAHCJPlq}?Pw*4hZbu@#0vk5QO~e>USjG#%,RhtC1t^fvH5Ez%' );
define( 'AUTH_SALT',         '&%nZw*1E6:05k]q#QtL4v<zn%|*fm]O+C{L*MQp3K98[lfG8A M]YEA!S}mS`J7L' );
define( 'SECURE_AUTH_SALT',  'rsl,Qa9v*d5S^#Cv;+}R{m?.:Al%uCR.XL/aX89u=;r?h#pn -><6j(llfV,z3m:' );
define( 'LOGGED_IN_SALT',    '8PLK[c$?b&)TSZGfPE*bJtj*ibSK7XcOQXsHptM!LG[r6M,*pO=vQ|luS0pmz,U$' );
define( 'NONCE_SALT',        'ci:70cI2tG{H+2lOX1=2$BZ|Q~R>W[1pfM-Y6N]gB)i&_wRGu8{,8nxEk,|G39g!' );
define( 'WP_CACHE_KEY_SALT', 'Kl3)!rsT`{5n*6F8VD)u0pRCPRGG2Gh|gW;=(b0a.L]+Kp{1bv^AgE7J!/4h(ndK' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
