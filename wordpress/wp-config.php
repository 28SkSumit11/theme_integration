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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[@lDdMQEL{9cviHddIxw^{/Ie-W@J7qyG(`DOW8a:.zcli7`9,JMfgrV!L]3qsKx' );
define( 'SECURE_AUTH_KEY',  '[e~@OTQ0ziT?S~E>Nd:n$gbR/b1kf<c!*hR{I2zGC9IZ@Me1o5U3;j>OIEw/8%),' );
define( 'LOGGED_IN_KEY',    '_jU{K7o$ox/bj/FIx]#J>/jMF.OMwTRwKV{F)1i/ydkB9z[A_y)R&^FcW$RjTAfa' );
define( 'NONCE_KEY',        'U`P{u#*G,s~390>+7Y4U@;5V/r!)S<h$cSkOU@|U<uis(J>2K.w)uu|yckYb-oI;' );
define( 'AUTH_SALT',        'UguGk/>~dcv9m_,/5jlUG6 5ItTyNf:egbt$CWuqvJieMb(~|}j]KQro.e6yH$se' );
define( 'SECURE_AUTH_SALT', 'Eziu4 f5aOeh6wIgck>[`Tg.`y+@bIcXI7-W>):)wE*/0Q,]F2d0COHa~t!{m_vv' );
define( 'LOGGED_IN_SALT',   '_c -1A`>Gjgl1n~M9mjDvu_y1%8+y*%wh7K#!,-R]Z,=Ialb*HfXS^fRF8E!OT(@' );
define( 'NONCE_SALT',       'xmGSEh@JzkZ3brA$HK|p4I^MAehZZW!&/tap}vM!aQAI99QfnZ^XTv8v7;9v]]sh' );

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
