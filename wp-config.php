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
//define('DB_NAME', 'asbis2017');
define('DB_NAME', 'coba');

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
define('AUTH_KEY',         '/K{U?.Et#:g1WK61|zQL.N>[Kq(L]1+b(boNCo$3((67zG{f2f|RE$!FO/n;(J1e');
define('SECURE_AUTH_KEY',  'A4P?^6h$Invv_mC_5Dhj/7aaq*t9bE[?J$ku}yslyWfCgTxz4e$nW.z/B)7KKAEP');
define('LOGGED_IN_KEY',    'nr-RXd8l$:-gBG!eBf+pM{ij?2I3}#{2q7[|EHC;vaIPs9e?n9+Udj>+.vCE=~3h');
define('NONCE_KEY',        '5T$=N&za<3AC]^5M>k?Q$O+kX~0c4vdY=hw&T jAWZ|$.wv#[9u+&B]Y`np74rq[');
define('AUTH_SALT',        ',#*.r}$s19=Wah4JT*m,]-alt~fef&ii;(u2e*8HDq@U%pb}(,7k>Q0_*O77whu2');
define('SECURE_AUTH_SALT', 'RMi`}OAzP[$$M@}u3ssypmdd@8H{%`3QGv,*TTqAS x0/TS9K0QGhVykDi?QW^X%');
define('LOGGED_IN_SALT',   ']|]0E[:CokS_?Zw9sX((,#CxPZ$|xt+e ZD]8b_,,w/}PEv#m)MNG@(0Z]pMHac1');
define('NONCE_SALT',       ';9j2jEdL|SCVL>wJ.NO?^R&5If?^x0A<Y@150%v57;)JLNU2h[R3+Y:PGdnX$hm@');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
