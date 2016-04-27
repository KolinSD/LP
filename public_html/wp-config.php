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
define('DB_NAME', 'c90576h6_wp1');

/** MySQL database username */
define('DB_USER', 'c90576h6_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'hMZUPR6J1');

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
define('AUTH_KEY',         '(];Zf+Md}{,bl{hRMlBFU/n|jylezC>gn^w9-#oa)VEj7-lqI0M)$r-trO+DjMh*');
define('SECURE_AUTH_KEY',  ']<M1ED$X-!-^qC-Q^c>u9ZQYT<?JWA^Xdn1:)@1ml)ka:~f-:)}|dyACh]&e=sn<');
define('LOGGED_IN_KEY',    '~_#0OB<h+@51V+{EdV~`Mk[D-+In7$O^~1BIs;(--8-][2|y0?rHHu)IkUK qVAB');
define('NONCE_KEY',        'Cg`t2`u!z{#1+YtpOc1{Ts.tl[#S.V<ga sE^S~J.9B}W(Mk{GS5 lYTMD+[Y is');
define('AUTH_SALT',        'fl@Ym9||vVH|=uS:0fR/Aopumx|D&2[sU[qXF-CI,_KKpRFDkjshfmAN*K!fy+kt');
define('SECURE_AUTH_SALT', '`;td-COI!`1w{:2=sl2J-[1:xUxeOI7RbAy,) qyE`/Vp69N}I6}<w!C]k8/yV+z');
define('LOGGED_IN_SALT',   'U2>:Xd{2 aO,q)ETY_!H:_IX~52gfxS*s=5D;+:9S*(x:;+01{YhCBF75^:~|)gC');
define('NONCE_SALT',       ']u1e0A^}gjd!wJ>jr]$#!+o6N;:%OX5#]OfggoK(FG{ipS{,9D|Kak8eb|_0V%:P');

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