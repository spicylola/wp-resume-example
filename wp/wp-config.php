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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         's.f$v6GRxuB+JEpIp93<nn:>3EP5C8:d5^fIyCHuj;=e=~(w+3xcWhq`{Z}+N Rt');
define('SECURE_AUTH_KEY',  '>?}xcO> 5c]*+B|@u<CJ&)8%k^IVzY{%WK(?ugq>}L_392yAkp@S&C^gPd&e/8LP');
define('LOGGED_IN_KEY',    ',^AT]DW]0<w[.GVaY3IqwMp&e=6nr.dQir[2n*u+0S=X6Utx$f5D#HsENXqdPuT{');
define('NONCE_KEY',        '+rR%+T/kWg+lH2_i]0r`X;~Go-fV m5ao]5Vgn91by#N#dB/;#N>(UDW*dZOG[?q');
define('AUTH_SALT',        'aGfo#Hwe3HYAxN?()SL4G[PLXiSj}%gb@e >5*^^o3aMB+rRYw7O<9Ves1tZEOeL');
define('SECURE_AUTH_SALT', '~+)u+[4Fh3zF=X5j2)b>X7$_pw6pqu&aq;u|ECTR#cYM#/6793ITn}}plu_T%jQJ');
define('LOGGED_IN_SALT',   'cK9yM^Dz_-Y,WD04Xd[]X$GBu}0Nx3x:5iWBsP?-Qz>L2Zhy!Pu%+Xoj~TnrNq~M');
define('NONCE_SALT',       'K?Kr.n9LI2S$Fg:;?xQ lulP88P RXSbMq)_|#}.OqOA.xqW`bQk:,^4V2JFa#H9');

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
