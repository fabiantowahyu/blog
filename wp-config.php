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
define('DB_NAME', 'blog');

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

define('WP_PROXY_HOST', '192.168.4.1');
define('WP_PROXY_PORT', '3128');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+|wHrgtQn{C!*rFF.56-+Z}n^w%m#k0C-vMwC*@c]d>z^6p `2ncye!R;.VRR>Ji');
define('SECURE_AUTH_KEY',  'Pp09nM{L8{&Q2KNQ^?)p4BY~FqW}6CUL`nh)hIZstBm<h>srjv%7kY+fDK0B8{Mr');
define('LOGGED_IN_KEY',    'eg^xMpYH/|7eye.-l~uU;*&<>:zR-o@[NHDSGvx4t)[YEE^{n3;~]z(5p$q6-oVM');
define('NONCE_KEY',        'A F`QZMon9%:5j,]fczJ/W676=RvHIXcA +R~L=T8 osNvKTZZRpE+8cg95<&)Z]');
define('AUTH_SALT',        'Lu|4]+6<qJfRpu&-Gtef9z*AR}NJH37nhAQb~I))D!1@|?}3RX>d~;8e1Pt_dO^~');
define('SECURE_AUTH_SALT', 'Q@0<V/O0I+VV3IDB[uPBWU(m+GRU2iY;FSN8D*NL(KL_hoiJBciWlG[@RP(`X9UE');
define('LOGGED_IN_SALT',   'AD>Bv68H7)cenLfS-E+?z(#rL%phIi_! HM?#g:~0W@>_,g4L,&wk225C-i6@Hgj');
define('NONCE_SALT',       ':xK{6t[qgJJZWO]LZZW~<R(f>mg;KB(q 2}=o{FNIu.U-zo4b;+e*C~U W)%bAC>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bk_';

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
