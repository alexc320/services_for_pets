<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'krutov_61970' );

/** Database username */
define( 'DB_USER', 'krutov_61970' );

/** Database password */
define( 'DB_PASSWORD', 'c27627771b109385920f' );

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
define( 'AUTH_KEY',         'EQ`l;Pue/K9%7x~Y4#r`Ao{`y~5H,X>s,WLQ,B&uiZL%Kp!x]vhth4;2~i>3563^' );
define( 'SECURE_AUTH_KEY',  'Ssq%v`tSNmCGhOvtf-N-v&PIf3alm?{PP5DTq5MgVC7wq$4C%F`OMN d:dCJ^,Mi' );
define( 'LOGGED_IN_KEY',    '>5XDRg(F`xlC8{=BpG[*Ety@ZKYhHdVZDK/XdbPX=}#!]  6UO%y$Cs@F%|C)nOE' );
define( 'NONCE_KEY',        'Z9TO.YG@ojE.&2L30 ^V#d[?)_$:UNUk&)XF:.)=+*:xjlPjry!c_*$dXw~ufhK~' );
define( 'AUTH_SALT',        'K]|{//9Vu^;F`Ey![PD;C.2|>aXn.Phs.D03U6MTCEEk_Mg9K_N}^MadCO!|h(gE' );
define( 'SECURE_AUTH_SALT', 'A1fc|l> V$!)AgH/(Tb`rT~=bzuy~mzvMA$f7nJYkbE|Ov7jd6* e{[S@-z-QSC6' );
define( 'LOGGED_IN_SALT',   'i+fX)T57_m8/A>lZQ)b_h=GW)>w]4 -geHTn$6Vk}%RRCO7gW(Cc9&1iM+tmZm5t' );
define( 'NONCE_SALT',       '`T6=o]JJVKaCt8pIP5Rl}cQ!9Scpkkt6NGkx.RKbzk6gA:d5v<t;x15z=I6$p;#T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_hZl1i_';


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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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