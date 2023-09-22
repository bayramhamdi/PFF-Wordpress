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
define( 'DB_NAME', 'dream' );

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
define( 'AUTH_KEY',         'a_t:E7`!$)40}T{V<B4G,sE1l~)+)^<hFN02w2nE] z8c]u$6OOv86iL$_~/rvsJ' );
define( 'SECURE_AUTH_KEY',  'x:Ro1YBCd(uVS:eFNVM(craU);0r7>B:bmrR]P-HO}fjSK2Tg_?#k tW)z5yhM{p' );
define( 'LOGGED_IN_KEY',    '[?7dUq+%</L~!R*_X%KQZhKGCA.%No7z7%!G6v(a@o[1.I&utlWdG2w(`Ib^wJ%.' );
define( 'NONCE_KEY',        'qfY<Kt?z_{l*nf_.cSDX}7yf$PXf*iU|B!yn>Uby/cLy.DB9-<yVmDI0fzvc0E(Y' );
define( 'AUTH_SALT',        'AvTU{g=1L|DZq&D5k@0LX$:u!g19XZ_,>$LQF~G%b 9EYIGR@2~[Y8vpfr%lo3kN' );
define( 'SECURE_AUTH_SALT', '^EWZvAW/vKEl3zenRSoIaG+y;B?Y_5XV9Ap2}LkYkz 2HKGC;%UpuxqRQ{_Xw9?x' );
define( 'LOGGED_IN_SALT',   'YLXb6`%Fb@l4+G(do5AdhwMEu`12!79uCmvaY /),ucJ+{? 0xjL>EQRjt:YO^X1' );
define( 'NONCE_SALT',       '#(4[_|JccPE!ex_^nL_!}&o#VBQd=3C8:e`HM8%$UZN5ij$;g>UPV8!HhV#,7#:S' );

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
