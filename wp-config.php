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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'challenge' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K]kb`xcefPGQ*/7Q9.f>GYhD &2CK|WpK4p[I|97G+~eB<=R*!q.#*o{yGRkhZ{?' );
define( 'SECURE_AUTH_KEY',  '0vIR&68>KX B-)aE1OKvtMi{@@*8B_+_+6e81{=5rPd%[Sio}T]]&OlP~8ak Z}K' );
define( 'LOGGED_IN_KEY',    'j SDezpvf[GN{<%DI@p&Qj~P&*V9*& hs#:SHxA[rv96MP2}|iJ|[i{?opZhM1&{' );
define( 'NONCE_KEY',        'sm2~@?Z7ubqj=ifeifb_@S}{ay~k25[1wg+gLoHvu^z<meZdW m=&Kez$GxSy(|,' );
define( 'AUTH_SALT',        'w*bCFjywPX}6_{qMJ9fPyRxW<5fiRtApQY_J![~uQj)2mjWtpyXoq 33%Tpu|{.K' );
define( 'SECURE_AUTH_SALT', '<uwL@Bhy3fD[E03a>@=vNYNu I`aBj=%Y4s$9;|CafWhXL-XhyHX!`}H1q7bAC(m' );
define( 'LOGGED_IN_SALT',   'd&;|}*>_!^T9uqJk5q4xO7RVHQngAMcKB*p$,:6o!)vy;sr!-U=Q+zp@v5S,m)_?' );
define( 'NONCE_SALT',       'BdPk(F<=s8uo3b50x@N`^!qi_[5%{/.<v.4McO[qQ!ZXaFi1KnuM2iT~5!ryV;s:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
