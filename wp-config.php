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
define( 'DB_NAME', 'dwordpress' );

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
define( 'AUTH_KEY',         'iv?(  #<#Y+k)u2U|V<.<IM8vf9|Gy wmd;bf2fR6!P;(P9I6sed@lPe 7J+|^/@' );
define( 'SECURE_AUTH_KEY',  '}=/_}ZURFL_Pe+7ExY-D%3?Z6?e{6prmBfL.Y(1#dxZ;7q%,6>c(uoD#6,lEI5nc' );
define( 'LOGGED_IN_KEY',    'Z-N~zAJTj]KH$`P3!}</kZjUe1o}GodG0c)^-jjNpapv=v<blY.Nn<Q~Qd$pi1Jd' );
define( 'NONCE_KEY',        'iynOpP2,bUG: 1Y5Cg%=QA`)Ce4d5voR9XgiQ+k:UF{mMb[{mhZ>WtApm/!VRsd(' );
define( 'AUTH_SALT',        '$hV&7g`jgSCW34>*ZVRAYDkz*I7M]?qb 37wG^7{P2RxD`uxN}/#T]Hqafg+6l^0' );
define( 'SECURE_AUTH_SALT', 'GOb6BPe1BYFC!o9d%= 3>:rVXp~=3 ==OY<J8)WJo*BI $C<x<S?c-HS>+RvTVOY' );
define( 'LOGGED_IN_SALT',   ';jY 1!fO:=!hFD6pjaxw 6b!EN?#Z)R%,$tF8 E_Y([)=Zh,|$z=$VM-Jb_0#=eR' );
define( 'NONCE_SALT',       '@IOX3&n6wcK(,/mvbiHQG=f))`Xy7m,dRkg2!R}GFa.)LV.bfc%[h?vu )|8;ma@' );

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
