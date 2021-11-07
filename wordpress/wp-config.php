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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ')AzapezAG#0,R=##^+M8tYxau[=rX]o7%?tLeirEEi<:uv}Okx~]RC.(#*n9n[Pz' );
define( 'SECURE_AUTH_KEY',  'qC.9}i.C$X[oIQ+H{(o]#cW~vVpAR%gGX?`#)5jYX$s)f-0!-psV[)T~+Auw=daX' );
define( 'LOGGED_IN_KEY',    'gf`8VUk{^dEO66E4:P7+C^1zS;-`S.n5B^)@+w*#tgWdEEmB6s2>A?X4{mPLvd/R' );
define( 'NONCE_KEY',        '6wKMCC:pY8mm*hk@`n7O82P(yV?H?eW@qPRT2mkiCfE`>Wo*>HpQA,MHx#/[D#@a' );
define( 'AUTH_SALT',        'e,7ko]`$r~8qRcif3Zw~!Lc@pn{>#QJHj3PTu1k}De(+dRkX8^-p6w$9w8{1;0:8' );
define( 'SECURE_AUTH_SALT', '`#@+=,>+(X|><<)SXGDfhX-ul`{*_[oxwo?4]z/<<=p7<Yt jFck3p~E};`oRV) ' );
define( 'LOGGED_IN_SALT',   'SdJlJ`gJss8N8eWI8ny657/]*#t]aGA uNI;~O.j)FPO4&>V+oPXZ0x3nq/e2WNB' );
define( 'NONCE_SALT',       'D3T2K(LRd;(d#SvZm,GFHhrXVo]&,9O_CW&E-g>6eM>bx9E3sSh_@ecvYoDLn`f?' );

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
