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
define( 'DB_NAME', 'edupongo' );

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
define( 'AUTH_KEY',         '9DIP{D( >F.RP|c}Opn}KoK/}Sn7yv$ansmU*N}LS1PDF`=06%Vtt`L-G%!]4UGQ' );
define( 'SECURE_AUTH_KEY',  'SO-MaJ&7`CZ0)4]^XncdzM|cJ{J~&wQV=kVBC),mNvPR7$afE|6=IBOIsM(l6RnC' );
define( 'LOGGED_IN_KEY',    'U*7?#dzc0SWPoMk$Z;Y<tTfZPQtT{W[lP1QX)oM9k9SJZ WvE98:Kh.>S|wvB*X&' );
define( 'NONCE_KEY',        'Qog7%v^nE?msA17lBu_v4Sk:ZeS<#~zKIj|[8JKI^z{ P#V%XT/|NVG4j8R^cBVY' );
define( 'AUTH_SALT',        'O6VZ*ZnQB|SBz0}WIpS*!!`T#k78AdA8mCyJr2@Wp%Dkg[v<jAtj6e6YNqUlA{n9' );
define( 'SECURE_AUTH_SALT', 'mK*.<pb2*5{rCLq/qSKP63gB};e*X!^s>ZeqbTB U/t`v3WEcmek`R?<Jt-&3bM*' );
define( 'LOGGED_IN_SALT',   'J1k2Tm/I&.i_iB6;)ypI/JwkNQm[bK`<*W>9t`)mM*7`lyy<Vg2!Fj0hHF2K ycC' );
define( 'NONCE_SALT',       '2u5hD>4p>Uf Z1A#nBl.z#/<0Eb#~.kcn#$?c5y:$/GY.4G!rUSx};r &BkadEjb' );

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
