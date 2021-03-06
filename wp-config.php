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
define( 'DB_NAME', 'hill_hoteldb' );

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
define( 'AUTH_KEY',         '#)b$SV.!T+D]dQ 4IU.7T@*<w0kjz%}pC5:]K.)k`Se/[wH,{=-_,[*^U.&R+f W' );
define( 'SECURE_AUTH_KEY',  '3K[gtx2AT{8Yp~Sw;HO{Bpu;K_+J5/OiSg/mdb@5:8t9z`r;^d!0{b<tQtO(q!yC' );
define( 'LOGGED_IN_KEY',    'g3k/AC!kD9GAbNz,W1!4[pjn?. SDS$:+7`V;X4AhI}p7+mg8OV2Xfl)oTzV->^)' );
define( 'NONCE_KEY',        'FT5hU~:@DXL_<Q]%)@71.X9`zxH}TO0Bi8v.Vy*~3{:d/?n<{z,nPG2Yjx*6xS/#' );
define( 'AUTH_SALT',        '&z[eF*_Z6@Ljg*H3(6ilbjx@._sr.mdQuVjXRR1s{h[R/J3%?O}zUV*}>&jj,jF|' );
define( 'SECURE_AUTH_SALT', 'OEuM~Wv^=?HHBU!B;:<.JvPW}?Vt@h^Klz[~G#di*mf_dERFlS2#x)X>7.:%pa2o' );
define( 'LOGGED_IN_SALT',   ' PvQ]=)Mj[SH5[_=,(GqCUkJ+RG^uWI_ZXi=N>8l>51gVa2}3xiyG?E4||+[.5tS' );
define( 'NONCE_SALT',       '/&?Zvv*<+ZX$^)?J5qYm4ib+]8,RNGJ*Ok6A;k?0npYkj}a(vqJ@ :TKt6A9L-|T' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
