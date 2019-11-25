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
define( 'DB_NAME', 'appliances' );

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
define( 'AUTH_KEY',         '(s$:5}rzbG7kn}&S}Whtq6[]U4cw*CdVsZIBA0&x)U:N&=TU:J.i;Ak7WFcFbYe?' );
define( 'SECURE_AUTH_KEY',  'E3@-|GTm]g8#qtj8b#4[;S.mjVg=?C4<o6(e54+kmzNS[^(J7VgBQQO1Hv(MB>n2' );
define( 'LOGGED_IN_KEY',    'T]Ql^p3lWv&RM~cF%)V2PXby4)`FYb9 J1zQkz|pU{Ci+>d&E%`uROp^,y*${@1V' );
define( 'NONCE_KEY',        'H/w&N@Mkq*hKl#]GR<$>:S7ezFS@LU<t&UTHs>3TgH2|1fa[EiGet0S-u+$r*HC~' );
define( 'AUTH_SALT',        'T<H<`shk(.XFE**za35Ugz+riD(,%T5fB5uwzu#EmPWvcn<wIzIz0>D&gP*`PRcq' );
define( 'SECURE_AUTH_SALT', '!n^<c/[NGab|X8ZXX{~$)3:gp,S;nwGzAJg(eQrtd^*czmZ}-053^SE4C|w8Mmj[' );
define( 'LOGGED_IN_SALT',   'VI]Bi5+g{E]`^dn1a[L!,?/?}YxSP:s-J83BiDDfwPYO+Bh+MFa*I{$Cj=1}gEyX' );
define( 'NONCE_SALT',       'Rf*zba$F<_TiY? /9m=c,1$$$^I|y!URiJ6E/h|4)C9A0qEQIjH=A]6+]qi&qt [' );

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
