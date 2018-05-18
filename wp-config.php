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
define('DB_NAME', 'fristdatabase');

/** MySQL database username */
define('DB_USER', 'CommyTinyone');

/** MySQL database password */
define('DB_PASSWORD', 'a7sHd1viTI0n');

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
define('AUTH_KEY',         '&N+/o3~E>hJ<9lEZw3iiVm3i =0s,T1{Xp$Mw+M%Y^TU+a^l<BVP8Mv3da:W-a-o');
define('SECURE_AUTH_KEY',  'I/!Pr)ZdL`;3RH:jY#WL3pcd4/I9:zQ[yB_Me[VZ4UdSN&81[^J:VSwT]z-tp5^+');
define('LOGGED_IN_KEY',    'D).z SeKK,_ 2Dm#7|1|UQ91/SU;a`4?DhGpj7m)-{~`)(}>ruLl{aeC rh5z`ug');
define('NONCE_KEY',        'hnENDD*M5VCE t+;/ ]0I<n_~Jt^1&ZeqdO3(tA[k-MgLOJwKk($;cVC,muO]F0h');
define('AUTH_SALT',        '|VY@@i2;%!&!8M]!ZoB2b!1qv>nf-Xid*.B94w}R&l P/a!sq]3[x,Vofb6+LDXA');
define('SECURE_AUTH_SALT', '/zJS:7X#n.T/(g!s=! yPgh`9#K}8X{bm9C;QSYIMw&:(^iv*nHVH>BP<6cQj8gG');
define('LOGGED_IN_SALT',   '5{&:Mg>@P$ua0=nVs(bZUfAF]Gt{{i$N4 P41#|( vQI;Ejui<JM1m2F?-8c>m/?');
define('NONCE_SALT',       'Z@[b#ua:<b1m-oP0F.LNy#ILbSL=dlTV}8{p8w/fGa_kNEj-#)3QA57%xY4p6H?X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kt_';

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
define('WP_DEBUG', false);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
