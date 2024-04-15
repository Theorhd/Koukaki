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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'f_vrjo7(mXEhp]6gC%J=M8H P1f4qCSkMf--xP@&EU[0%e&a^&;ZYpd7hj}@z(E#' );
define( 'SECURE_AUTH_KEY',   '1G&y+8Lb@FV@&!N6h,Nw@%SW]+Dyw,;t_d#Is3$-8W-93ndk7W%0u<f`nF !BZ4(' );
define( 'LOGGED_IN_KEY',     '`PiaS2_B=pX@*PA9>n=eDW+&nv];s@A10$=U;N5hs6-rW,hsuQ~_nwfZ}J`yn7pE' );
define( 'NONCE_KEY',         'dw5pbF]&c=mvwV1J8T<RuIzcFZYq{mX8r~Y=XJ^vtV9|LR@aV|0-Jj_vo*Cp,,W&' );
define( 'AUTH_SALT',         '0b8o2-o< Jy;clw2@iP!G*;q>1c:+8;Ooo%I57^~H};kL5HtWi5p#K(D&emCm:6E' );
define( 'SECURE_AUTH_SALT',  '4:.tmI#-v6Gk%INnee4z,<|Dx4SkE$[pcIk-f2;XnWq,vJ,MRlWo{WuUExbx9k,9' );
define( 'LOGGED_IN_SALT',    'tgCG9MW@6UL+n/j :;2a?gPH$LJ2!;UhfqWQF!f^ 0Te2,ZqRkW{Tm%WYn+Q*>bk' );
define( 'NONCE_SALT',        '*(vM+pAF@`|:0PhSzlOY_?;2nBgfY^Joe-1 ]FP[? LF]4N?nHrOg-*deE2$*0jr' );
define( 'WP_CACHE_KEY_SALT', 'SGBdfF{iC;+%k#9S_&`eT[|RMOj^u|8zBMBrHx|1E 4_bx[|ev>;{S^}}8)#yS?p' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
