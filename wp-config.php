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
define( 'DB_NAME', 'wordpress_plugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'I2Ddobg,J8P5MT8+:p96Y*3~FW(5<ScW[JPF.m@:{eKP3.K_f_k3e.hxWeeNHAmZ' );
define( 'SECURE_AUTH_KEY',  'F>0+z.i>XvX( _ ?Qcj;03o(=XF{jSdG&UR6rBQhRQo !;rO#:.7?jG~[e]J@rf!' );
define( 'LOGGED_IN_KEY',    'D?x@s/$Qh~KGOo?_,:>6cNk10l+z?zeddFhxcEiH#m;6$8V>*t%,-)U2(4Sl&X40' );
define( 'NONCE_KEY',        'mBc!Eb2jNiFYsaxPa)xn53nG?b,.vG`y==|>NL4(<rF/~s^VbZ:T@q}v+i@ayWcq' );
define( 'AUTH_SALT',        ']!~VSM+d1RBZZrMp#mMlu7^lr[uD&a..O?iKWO;^8S>Q|Qk%PUPDt[wgsi(Qa`No' );
define( 'SECURE_AUTH_SALT', 'lqrV$Z2h^j72+bQnhRpGq-mKaEA17kB-{*hW=[WcLDVw>5f%T.I}<g8N`Y-hMcc|' );
define( 'LOGGED_IN_SALT',   ']Y<}BZNEgT`un:RwfiwxEF:>Gcn+oA64y8HZ{D!|dxr9ARtaWbi>`eVix37DcW**' );
define( 'NONCE_SALT',       'DsIX!!:aCu_V-z15JNe,{UBepx_iF1j#kh>Gei]6/&qLUGk,QXjaVJxge1:wXu`x' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
