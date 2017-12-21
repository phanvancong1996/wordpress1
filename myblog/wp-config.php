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
define('DB_NAME', 'myblog');

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
define('AUTH_KEY',         'e^Qj;qP)aipMBu(_Hh6+# %@fjU@p%ixF21*GA6hPZX5wL1oI=fx 8:#)Oy16m?2');
define('SECURE_AUTH_KEY',  'Aahz48aZ]+4e7i9Y>#%#]zV}5/Xs;lg?yzcz#RE4EO-|E/xc;2gF7y0VCiip=V#4');
define('LOGGED_IN_KEY',    'u *OQu/`,bt3#L:rt6N8DT+-V{Q?FNU.#nq!GV6n!9XH? zW9;}9eF*yo0Z,z7`B');
define('NONCE_KEY',        'swxuZQOPY3{>~@83-(C*g6#~+&Djg-jq2|O?=tL`qG0n,#@u$_$9#ZaH`5Q6+VR>');
define('AUTH_SALT',        'f?VqXr?5<o;{gP;fx7W*u;_gRJ]%.FUNt3SXG5Wco*iT&oNjFBA>R-`#idF-=!|i');
define('SECURE_AUTH_SALT', 'd}K30</%<&Aq[ZL-Lf1^&i&*SWCp;]hX#3lGV-)&OV=RT_ZtlO@>;r{ImmU%E~id');
define('LOGGED_IN_SALT',   'c,V8i]r.,r4Zq!;f8BA6xnW2ru]J|XL@=}s!bC$_ZGlq7Pn$jSCtZ!x*Hy6./{95');
define('NONCE_SALT',       'OCt89CLqbOh1/sb[@|JPZf bn=up1)?>WP3(jJ%:^V,8R3~YDnTM:H/;zM$H^Ff7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

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
