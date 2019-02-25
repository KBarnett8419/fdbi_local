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
define('DB_NAME', 'faithdbible');

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
define('AUTH_KEY',         'DR3kRz>nq$0YIC==76jBMhB^D@2>{`@{&q-kl#A#9?PhH2tueS;%po$~t;LmXu./');
define('SECURE_AUTH_KEY',  ',Wh[e ZMhK(=w8}_>ud|ycE#!u^p*7)rebZ:HH(IM].34-]}n?Zvf3]*pT{`#FmC');
define('LOGGED_IN_KEY',    'srv-F{;.2x8B4Q!s>./e{tO%$>j5Ul_B94Yz^}sZPfjR7E/Ib<~fO5d<N38HxJzn');
define('NONCE_KEY',        ':o9AN4T:Qc3$_qb8=^#=;gYRTP42|B#R%!s^O>!J;Ho_v5P|a|tx}F%/zxz7N@+|');
define('AUTH_SALT',        'r/G==:_#QyFfp&Z(*JzC2T ~QvUj<8bU*StH$Bt~HHhd{)m:Tx )!_WK d-HgXGB');
define('SECURE_AUTH_SALT', '7I6>ZY)17iC7XwoO_S*Hu-,,ohn!c{jf>dy)UwFx5B9sglID+>cGhc;8Nx0`nB<z');
define('LOGGED_IN_SALT',   '! 6wSuI,#D:RooX/r&fWH=dHnA|7!p!t+yL1n5%4=mQe=J~A7;r_[%o(X)fU0fQp');
define('NONCE_SALT',       'X&fd&z6gDn}iY_(&gZb=wt4Pws80kNa7$wZ3iX3vsSc>#tN}b/)_{eFZ_]N$RrzZ');

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
