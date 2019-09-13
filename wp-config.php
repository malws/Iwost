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
define('DB_NAME', 'iwost');

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
define('AUTH_KEY',         'Te44HssZx<(66ol:C.&a@EOJFU)G5hN,u{K]3<45>#NtW]ZyE|XSp+^*p}h2qBfg');
define('SECURE_AUTH_KEY',  'I%!5B%0`<NSY#yHA_!IJ9hJL9#J:NU_ *0I#gZx%WYM!ZJ/=QT`H-6%+3:0pB3oP');
define('LOGGED_IN_KEY',    'b$<h+-Nz4.y3G?5:aK:.kn|qXG$4f6|_gFa6?;BxY)>TA]~Eym)eJbr&<:xR1*W1');
define('NONCE_KEY',        'x|G>rI^QOH[$x.5PXjqSUzsGnJrHU)(76|[nCXx&$rGB609a3BgwB+6`gAaP}A,X');
define('AUTH_SALT',        '~%F;nK7:-^];; mF8O38/[ :3oi44I3`]J0n5el$JmJ2iY(Q.cW`q.<jx=a,giL_');
define('SECURE_AUTH_SALT', ']B#0=RdDw|V;c6`EgHhgh2Q,2/AzC1di>o]vKv,s 9+C- YlmeH{4tdrV-/T_uO<');
define('LOGGED_IN_SALT',   '}GUfzj80;!LPMp5r(8%378B|Pd5|X#C8UGU*oZ|Sn.kKqsa3k`9e`(|C#=~]2<ay');
define('NONCE_SALT',       'Q~+IXnvZ&Ifi2/sDp))47Xs!uXO+4*~n4s^s_|ktORuXF H<v,La8y0CQxI4d~W8');

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
