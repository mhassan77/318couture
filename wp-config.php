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
define('DB_NAME', '318couture');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vd?ae5OUhvEE5D]P%QZxe(c+fOAIt=lP$`dvr-~})1CUR7P$|vc`l;Z4tNol[|h^');
define('SECURE_AUTH_KEY',  '6},l.C))$!gWYb?L &%=#A:C0oS{%WLvKE8syG=1q#s>S.w9n`.,90or/cVUTVBi');
define('LOGGED_IN_KEY',    '@~LW(hfK(`mfXShuv^X0KgCmbkYOC=@m8BQH?~o6zybiLURPQLSa)R_Jh,a`,Pv`');
define('NONCE_KEY',        '9F_HVDnMAGYho)(O29jsifx]p$Frv?1ONz?]#A~1`j4u+9?wa5NM3i|+i<ygpH_=');
define('AUTH_SALT',        'Ry#p%f0rgZsL8X.,vnJCYMebh^-*Hz|G*e[[},&IUl@{N*Ai1m;,o6P}5%:UnXY-');
define('SECURE_AUTH_SALT', ':;4eA>SxI>%n)Y0d0i_1WE,@iNB%)*UF/O4jtD.ZODtS*3eqi<Yal$w!;bE+V}{p');
define('LOGGED_IN_SALT',   'C >nE`Yo{46<I)I1U$Ht&!:2QkuAEiGXM;na/[#bO7DJeUS@R8m!G0FfhD=2SO?}');
define('NONCE_SALT',       'dY9*:>_Roo_z=?p!H8ea5p`NyB:;.VVsh-i%:$dBIR%%EFmPnIJE>CXK@@8LAb%t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

