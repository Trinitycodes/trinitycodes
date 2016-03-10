<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/wp-config-local.php')) {
  # IMPORTANT: ensure your local config does not include wp-settings.php
  require_once(dirname(__FILE__) . '/wp-config-local.php');
} else {
  // Don't show deprecations; useful under PHP 5.5
  error_reporting(E_ALL ^ E_DEPRECATED);
  define('DB_NAME',          env('DB_NAME') );
  define('DB_USER',          env('DB_USER') );
  define('DB_PASSWORD',      env('DB_PASS') );
  /* That's all, stop editing! Happy blogging. */
}

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
define('AUTH_KEY',         'z{tmXX|Q*T6,E- U[c/}fYVcK49VD>0>gaq^b~_GZ}tdrHC(`B<)V;6=xr!p=e-S');
define('SECURE_AUTH_KEY',  'Jtl81]k[&8o`,iWX;>8}9zT.;GpPyi>TZ_Do9Z&=3|Ih=fc6y9wt+<L%bf}.n-Xs');
define('LOGGED_IN_KEY',    ' tLWmKPeG 4J,>`p`0LYF)|dg+j2yN%QFo.,SR!(urB?@3w~5lo5,WE31/,}rk{$');
define('NONCE_KEY',        '6UaknF}&7tVelo>XPj6bx|OU@Y}G^sCh7!~kZ#8bMn4o;#-//}U|*1i+@ 3n]jj!');
define('AUTH_SALT',        'VOTY{f68.Ggx3GeL|+<J2. .U]8i/V$YMilEuxJ|33d}vDjM{It-@A+Fdd-a(s8*');
define('SECURE_AUTH_SALT', 'Z(C+>s%]T [A Okfnk?<O(NXb2`TOy74Z=C.)Y]0TWQT10jr#PS;S.nDLm?OP*`r');
define('LOGGED_IN_SALT',   'w|+7?e-]gsea}|TJ&{YC({kXP=s.+c-k;ZBP[CN|^1vxlzY@I81SI@5}FJLx$-O^');
define('NONCE_SALT',       '%Df-x|R.4LOTs6;|/`D~`Z?:#m@#&+A=.Pb^^#1ziwSdSD#nzBgA7anZN3Yom7.2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
