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
define( 'DB_NAME', 'bibliotheque' );

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
define( 'AUTH_KEY',         'a.ao?zYP7hN00^XG/hpw;n$p YkoNSNsBK# ]~cTa-ZP(TFWB[kCS@=dLl#j7reg' );
define( 'SECURE_AUTH_KEY',  'uwte#{SRVMPYnE3Sb9~hvd7tYXK]Qf8l:^XcI5{hIeSuZC<So&I>MWz;6wV2^fNf' );
define( 'LOGGED_IN_KEY',    '=x0b5(+8?3/!;u2ntelR %A2wqEbmn!=` QjSn@v{eEX@AA3Fxlb`xtBVT<7cYh.' );
define( 'NONCE_KEY',        '}{~)ryMyo?N!0zFSwGTjiT!-7S;M:_Ya Q#Oy]h2/|tozK8IDT7qDETzk(zdc+8>' );
define( 'AUTH_SALT',        '^m&~dFHP,Tuhn>_!0=*pL&6A`LhY1Xn*5O;@!j]q}9k!Pj&_a]$c;W/Ge48}zAt@' );
define( 'SECURE_AUTH_SALT', 't=(#?_qw*7{cOTBz3%mM#T`(@Z35Bsf*IU$@}-*=Poiu,`vTD9N.Zq}5]${A28&Q' );
define( 'LOGGED_IN_SALT',   '|o&BE%=T_?4vSmb%j4gGJCXeJ>5Vp3m%d,ePD0v>*;kzFK6+~1<H3u%& db>a>Me' );
define( 'NONCE_SALT',       'd_joR;V5M(9.+n;v=cB&/k+C8D@Dje(E`|@!gx1HaX5[ERKyS3W=W+d4%2FQ[YU>' );

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
