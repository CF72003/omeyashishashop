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
define( 'DB_NAME', 'omegashishashop' );

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
define( 'AUTH_KEY',         '?0IQ|6JIg{ddE_i~r R/d$K=aInvHNZ><MiGl7~Xnz[[C=c>DkYaXDP{H;r7RvB#' );
define( 'SECURE_AUTH_KEY',  'R/7e+|v$GqNDo-T/DGBy$@T%;kK|]gPn=yl~%%?j%.gL<SYYQ%0ZF3J-~=oY4hrg' );
define( 'LOGGED_IN_KEY',    '.L]q&xSFy&,kt?g?vk1Ur=@XYDH>aagOP!4$g6`d4f~&N,tS}F%@Hu05OX$)ike0' );
define( 'NONCE_KEY',        '-[g/xp6bb%VKirR`x5 D2Ylm{seHkmxSY,ui#C0LNkh8f=EELZHY|M8g~ Z*(rjo' );
define( 'AUTH_SALT',        '47O3vA*kK@rkI`S=)eap5cGXEcu{I?%ezeH2Za-Hl#w~J3u0vAP)=4Tttsd{%3Ex' );
define( 'SECURE_AUTH_SALT', 'u^RVSi`cAk[:Ww>Y>E<^=T]lN/E6gp,Wx,N2zk1JZSe2ZrfFHP-:%&IGZaxpPhRQ' );
define( 'LOGGED_IN_SALT',   '43wcbh]L z5pu%c8l>KEaJp0ABZ&7&:_,ygwoWf5/J:lsr5 ;Me{]5e#9/wK^o<l' );
define( 'NONCE_SALT',       'W(No{8HdVEj)V0[:>A`$%>Vs!cYOkn_*Z)si^a_ymFm21GLS@1vW({O(=_.3IJ?a' );

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
