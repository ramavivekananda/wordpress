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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hcl_digital_hackathon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'vo.DAqFP?5oNK?c. Q!AQ%CQ@hAYIT7V`k&%Ps/^^4MzD0nU*hi:sHC]j*4{=@w-' );
define( 'SECURE_AUTH_KEY',  'dqT!)*@&+`REd TtRm1!P}ztjb&Hk+nEqj70@]?UY L|*y e)Z(*6LH:E5@%Tix!' );
define( 'LOGGED_IN_KEY',    'srcL,Fo@=N!)NG<fq,:{IXGH[Ld|;+L_cu9nexlIYiS/Vw_w}q&hIlR%>Ly an*=' );
define( 'NONCE_KEY',        'q.LE;eCp@`[utsibsB`N0<z7jnLCd7r})[X%&TV/n;4Y>h^#Tw+!8Rf{oh;qZ*=d' );
define( 'AUTH_SALT',        'U<(qvpP{?dKt9SowmYLpo|M0WwJ^2>VL<arE!hh[Kv*afl_W2]cD1_XRR<3FJJsM' );
define( 'SECURE_AUTH_SALT', 'W%i7?F~DFh)+5MpzV8|=_Kkw)SG)/k09$n+o~1T4qMSx`Q}VXv(O{-.(W>nPk/n6' );
define( 'LOGGED_IN_SALT',   '>AKlm6I -f{!]o1jhr38x*VFM?yl? K9G3Wy(DJ1{)Ls}/JY S_(rntY>h;C~$ o' );
define( 'NONCE_SALT',       '$T{(7!nj{_1bugYwbBBK;&16UYT-_6,9VsN)3|lI!bIC0hj]J#arg$A04d.^UZ+5' );

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
