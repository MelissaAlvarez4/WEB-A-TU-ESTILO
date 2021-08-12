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
define( 'DB_NAME', 'atuestilo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'WiF*H?w#$U7u?<{RffB_{}b>Q8Yvd&B}+Dw!q1Lhv.VW`Q%ljtX1<=!h^#kqvKg?' );
define( 'SECURE_AUTH_KEY',  'cosx[;JG6{^}5yI@:IZ  qoI(Z?wu2aX2*VPIWo[E@z=}<v9>|Zw{Pn&LzW/{y&m' );
define( 'LOGGED_IN_KEY',    'VhgdY^A3}AjEUhpU{;JY;Nq@hIw?oAj %I2)wobP!zM4IHb7y*WmG u2+P{*Zo3+' );
define( 'NONCE_KEY',        '3}Kn,#8a)[U?A1Ur>W@$iWZQr=/jwGcTnrDy/PtLuqZY}tb~%nKFVM!Rhp&GlDgh' );
define( 'AUTH_SALT',        'TxdR#)(K]+)Xg]:Fe,wb#D$Jv+eH;:tZ]r+^(/I?Fiw6ecmOR0B>Y*)@C,-*0a)!' );
define( 'SECURE_AUTH_SALT', 's758~JT#s1M&WZXX*!NR,%<?!Z&f]o?2TN1>sD6T--kV8!UP3mpt97pt6L)LJ>Vh' );
define( 'LOGGED_IN_SALT',   '.ETTS5e3_wwI8$XPL,T&p+HEmV=wS OgPTMM[|VNIyo!TZ;5yZYJf)9S=HQ@*ZeN' );
define( 'NONCE_SALT',       'xqs_Vdg+WhR^o},;*U+QYmbiKDU`;U >3~ZNx~75;Gfd7z;*Tk)87n;08OX5KC{ ' );

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
