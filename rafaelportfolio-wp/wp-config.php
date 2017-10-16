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
define('DB_NAME', 'rafaelportfolio');

/** MySQL database username */
define('DB_USER', 'rafman');

/** MySQL database password */
define('DB_PASSWORD', 'cLsUMUHIHPa05QE7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'jsG.&UJxd=dTCiFoYM+xp)@X|0c R1>P1^Y+MO/9wjgU70vR%DB|Mc0~?$6Tvu(F');
 define('SECURE_AUTH_KEY',  'XN }GvdE%Up~mckO$I~Z3!-;y;H;,6+y^m;>v*W<E(P]8}p2+Eb$l?<#:g/Yzk}d');
 define('LOGGED_IN_KEY',    '&{ rP&ovq|2RX6|Hn|4 $-Z]uzGTiAQzst)&5WdI!m2p)uV?/B1B)$j:_= NtvC_');
 define('NONCE_KEY',        'dkLmBD5@l3dMB<KihrITp/lv:{SL s7x[w&C[{/Z*T~o0%sW([xjS9$J|XJf*Sg7');
 define('AUTH_SALT',        'r[!{,tW3_{.<iTY??IM+>jpvioY4l.P|zW:t<4ac_7QfKEN+(O@az7UUq0}3;8pP');
 define('SECURE_AUTH_SALT', 'f=W@J*yHXjck6ToC`thWy4ApQ1,ZY= iQCarnkXPpv4Gz4)mO.RO.C~1<.3W/Sn1');
 define('LOGGED_IN_SALT',   'nKRjtm4*N?+>2B^HsANr3PyVhQ&oN2Mr`QJT.pa^/8=aq-[{VCDV@`a`+huF.9@-');
 define('NONCE_SALT',       ',%v]S18:^lF2=r`#qR^dmuoDvr[PrblD->b[]Q^P:(!*{l,v)<Fwi=<^N2OLMRfq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbrp_';

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
