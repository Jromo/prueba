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
define('DB_NAME', 'wpprueba');

/** MySQL database username */
define('DB_USER', 'adminprueba');

/** MySQL database password */
define('DB_PASSWORD', 'claveprueba');

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
define('AUTH_KEY',         '$7J4M`6CFS;9e!WV;2p]lX4)BT:D)KMw3>dW6gV8P;NmfDxuH7=>wmz`Adq(OU3x');
define('SECURE_AUTH_KEY',  'pZO2$vl?b&a1N27JMv95/=N[a3gg)%NQ ifFu>q2-bBVB(m:W%eJa>FpuI7%~b3H');
define('LOGGED_IN_KEY',    'pE&WkP,F7R0wQ{U20HS#Wdhm~)`Y~N=DX-m24i.Y>r+.KUs)@/ d>F,AtC,qx{pk');
define('NONCE_KEY',        '^DMJ$8KUEXNI%:^I$q(v6qrcJ]F80#x:ydvJ6[j:4tt}sb;.ef7{2?6.|HS/5Iu[');
define('AUTH_SALT',        '%d&C|i.@Wum428m^uY5kW #:B6(*;19WVsXtlOcU|7mCt^Bw*d#lifW^&S$5AXl4');
define('SECURE_AUTH_SALT', 'TCMz qD_[^jXdo{8KS(&Uo0rjs1Wk;F2/PD8agNc[b0z{(5B,o^CxN09BWN_oYMJ');
define('LOGGED_IN_SALT',   'h5F+^*QodMPbZ?U2akRF2^i/t Py6)nwmd@=P~7orZJU,3!r*~*tAGPh+ox Ncu0');
define('NONCE_SALT',       ':SQ^$JY]6w5gF=2&C{aK7i78(B~m0f)H=@Uu!,oQ!1=v`eGIh_IM1aYiij*.`#}o');

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
