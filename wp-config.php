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
define('REVISR_WORK_TREE', '/sites/rtroncoso.com/public/'); // Added by Revisr
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/sites/rtroncoso.com/public/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wp_rtroncoso');

/** MySQL database username */
define('DB_USER', 'wp_rtroncoso');

/** MySQL database password */
define('DB_PASSWORD', 'wmNuc1$fm');

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
define('AUTH_KEY',         ':;X-R=x?K9vmF)Bx7t8|o_kYH%m&Z1e}o&: :/IpHs?023Rq|1XYTYv,uTv4>)Bs');
define('SECURE_AUTH_KEY',  'O_#igjfVA7qi$4T(;9[o+o*Fi}Mxh.ZcHW+~8~Am(Mpc>45Jr|dn$-<gRx0VJ6:q');
define('LOGGED_IN_KEY',    '^9v|_EDL)(U-Z6)#;i5bE{?^nfCNDh|-*b*(-p|b=Qrmok%t0Dm>40xM3{0)>,7d');
define('NONCE_KEY',        '-^ ;|PZLbVw&U`n03[nm)KV>lf).~^a7t.X`e!9 -d}ck6c]Mm]2K35_:;+xI9-=');
define('AUTH_SALT',        'rs/zdrh1Jx5NY}Cz:?Hdlq]~|&sbudp mk3!C[iXIJ`/?yq?<40`!yh1K5yt= @I');
define('SECURE_AUTH_SALT', 'G_8~}sXeu95BS~+Dft&fj<c[Fqxz|N::-8rwi0VKS^RU^0LaLY8z+[Xm_SG7Q+gx');
define('LOGGED_IN_SALT',   'ID|>d#?<+:$B+_QITun4drnn0Y-ECkq&Ne#;.+a{!{|9fh0Xrm8`O+eRBrg_i-|$');
define('NONCE_SALT',       '!Uq{4yo-F`o(jF%`$,0TA6l>JVCesNEbQJ3m+Tg/,e*e:aL_HcdX$8HtZ}qC3}V)');

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
