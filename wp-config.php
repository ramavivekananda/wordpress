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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

 /* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hcl_digital_hackathon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U;qIci5k&aPoBLkG@0nOt ]M-@KV73d/cWCyQVfivkq4:Y$G %m  hIg_U$|x{gj' );
define( 'SECURE_AUTH_KEY',  '.0lxVhzMOy#Rc@)RDHisAGz_Fjs{x,Dhmgr-Q[6rYG=F7()_Pw(dk;|zP,x`B.V`' );
define( 'LOGGED_IN_KEY',    '`l*^@nW&I..[XWS4sqGfy$>!wsD0aMq]1pXO|rC9g7d z,vl|pz^3qi80_Jj+q8w' );
define( 'NONCE_KEY',        'm+rPni*Iw!P!YN?(/d[#*curn(:mZOd_6Z/O/B<hn_S-xu2f/XDo1K5>=r;(ik>J' );
define( 'AUTH_SALT',        'q/BpukQc;R4AW{=H=E6W+v7o9Xf>O&TRI}}l$Hh_qkch?Zrut:QF<gt/}GmuqmA0' );
define( 'SECURE_AUTH_SALT', 'S;{dOwz-doPfL E`;%pkU;Bpy9#?r0g`Dc7(*GYP3ki`:kEU`[kVgS%OE]Wi`_0,' );
define( 'LOGGED_IN_SALT',   'X_D}BIl<lB!Y+>iJ(iyA}{[jgSx`VX`yshp,9;>Wd(cUkuT^PK ir!.;;AuX1tBC' );
define( 'NONCE_SALT',       'bYMi{1wk*1,hI^4Q*{|-0&zb9)L7k%i,Fg+BcFXa($$&o/V[x<;9;LaW Y<!=JkZ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
