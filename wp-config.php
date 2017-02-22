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
define('DB_NAME', 'wp_demo');

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
define('AUTH_KEY',         'gD<9ZY5]{nCK*P~hx4OF%Ji[hjeo[y[OsBcn#CM%<,g3^M(`!7%<=u+K7o_zb(<Z');
define('SECURE_AUTH_KEY',  'JyrSkK]C.peZD`{$0k.G^P:<<3X{kqGR@]#)<=~f_0-kb z8U{CmwufDX!1EKGzz');
define('LOGGED_IN_KEY',    'H4@FWg!%c9$-{5|| E7_VUX,Zr0EtS AgjK K8_b6`Eu-DR!t)5xThv<4Lr4,P:V');
define('NONCE_KEY',        'DEh!SH~MB?n`xxq%ItS$Fz%0(%IP%,bo)fnzR(vUsxPTnIX6as,qHo12{L4[%C3 ');
define('AUTH_SALT',        'P#e_{8!&fC~L9S,(J5fiK_V2PR]W^;iA>(6mPKuT#Ff; aHt9=&*zS2/imdzBDX-');
define('SECURE_AUTH_SALT', '1upIFQ1K+H/KJc`48!cND37MB7J-p,vhg:*[$ ~r4=g_Q=P{k*{X$,7PJT_DWm=t');
define('LOGGED_IN_SALT',   '#|-`Xu1w9r`+^kWguY[rO@{Ce2`]u(R>y$)!v;7S8}+#Hm(PWJ:QYoOvRJ$`zcX@');
define('NONCE_SALT',       'Ws?nIC[I~r.].q{y4eke*9Epr9}k[Y[2]5~LKwaxc8C{zNj:X#s8#;Dzb=[PE.7)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dm_';

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
