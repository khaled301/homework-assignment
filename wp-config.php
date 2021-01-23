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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Windows@2020' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'yn85gj!9n:._9rG0lC!*b7^CIMZMS8Yjm7KxRAN.7tNI/_A$+hnj2Nb>@/dm`,$:');
define('SECURE_AUTH_KEY',  '|2#/+wYm6bAd`o8)[mO5^Y7F<v|V!O||K|1O:, +^oD`@,L2#O19ev,sYm7]2O?@');
define('LOGGED_IN_KEY',    'R229`T,|LI5u,)WbQ998}u*uq;C4*$?k74.<@O4ELr{Y`5YSt[$QHE0*Pfv;h{Um');
define('NONCE_KEY',        '&tPchBEAYnKq7|;^tO2(9K_k;P~UICyh;E5..|f7J$mi !`|R<w>}fV6a=(%1~}D');
define('AUTH_SALT',        'P#-+toPJkDQ$ice+4.Kp=c|j4v!G>Dk7-~Y!Xxw*7+* 4hJC:K3uSn+dBG[e+|:=');
define('SECURE_AUTH_SALT', 'j7=~$!kR5;H)07-ErPN^`Fv1{- &HbU%FY)nf;^iNA*1gaM}[!$c3;,6o._V;D<I');
define('LOGGED_IN_SALT',   'Y5A.ULN)Fu[v/8p-X;|FH@8IrZhBbDV7+6y9KtKgBjgQM,6nLDG7+gl>MI3_uh-t');
define('NONCE_SALT',       'XkQ[0{lvD-^~=W=n(wk*t$mH.*J)q}48OQ0,+_)1:.|{jeq$uaXSOHo/Nf_HJRir');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nwc_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
