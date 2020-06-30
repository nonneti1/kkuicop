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
define( 'DB_NAME', 'kkuicop_db' );

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
define( 'AUTH_KEY',         'v?FS:X8UJK&?~FZdoLTV;iia4^Ablia!i=s:?]CCZo4[ qKDYRmPqO%M;o>7h4{G' );
define( 'SECURE_AUTH_KEY',  '/[r_!ZPWD`8!]H_dtL:Z8eXFCRp*@(4?ol6iOHu7IpX!i_6$fSg-iaoM_`7(Po|Z' );
define( 'LOGGED_IN_KEY',    'sLR~<3=%MOg&rk~I0)4z|h!_+Fo:5-lbuW7@>J$aJt{W_p[d]NG!j/aD_fO#q -H' );
define( 'NONCE_KEY',        '-9XZ%j@-kQ:2j nQ%E{|{gC*-{;wLxa];<Y6:f-+6vjfO|m*m$Ipt+|G-2rq86xl' );
define( 'AUTH_SALT',        'I6B5ziP0TfH$F`9rQV4,%iv%n{-vpmFCy_zq+Vb[Qh@Q!FN4lGY$:/f$?Cz+Ja[/' );
define( 'SECURE_AUTH_SALT', 'Vga:9n4n[d`2blwc(3g18*LF.I?8sD7l>)<#@-z_%t :oTxE9fW}))Uc)7Mp@]F]' );
define( 'LOGGED_IN_SALT',   'w2cK{nM +}#{<8E<NUUOrf3L0V&hzpqhRzv31K}Xr[YbVB.sSWu{F2Uwv{k!zX&~' );
define( 'NONCE_SALT',       '1X`O@jW7-DgzxBk^~es%9vSWW<OZLOFuG.%3Zm6M,53YWM68rIX~k)dz::FysOl}' );

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
