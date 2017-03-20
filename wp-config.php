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
define('DB_NAME', 'mattdaley_portfolio');

/** MySQL database username */
define('DB_USER', 'mattdaley_portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'ntHV3aNHHmqGUq4L');

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
 define('AUTH_KEY',         'fe.aj)(@=$mk5y+U{E4f?SH|fPp,| k:Q-GCI|af-uVq2C6t[1@|Srvq^s1(J<L<');
 define('SECURE_AUTH_KEY',  '&E_gmBGe*w sph7HFE^U?pgc;jc 7l$;>PELjT_]K5))Q-;i|_i`{zaFb8Pp&L#a');
 define('LOGGED_IN_KEY',    'nBjoj}N9HQ7E${Y!)ecQN-jW]8s%Z`E;YJcx+t:w>h7,`F%I@4-|<qCBEPEX>5~$');
 define('NONCE_KEY',        't =%=H/;3a;J-p37Ga=xBC&+N3@: i+y8/LZioh||V7_}+d)U?!-NnZCVAS`$mE5');
 define('AUTH_SALT',        '0%-[T=h4+Vq=@#-x}Sb_F)<iA?|o9h+xZzhew<lpmF<83/~S76}Ggb7Hk@SR$!F3');
 define('SECURE_AUTH_SALT', 'ghup/@jo@bTK@#.fK765 hFa`mTmY+/TP^F;5}a:wh.,mV*dVNgVnFegN)n@tvuD');
 define('LOGGED_IN_SALT',   '+i4q~Ii2=z-n!|fickykel!a;9!D40]dDDhoT$:Kr#y$%tT{n+}jjFN~>m--T~i}');
 define('NONCE_SALT',       '7E5u&?3%+M8b(>a|l=;Z}gw-YobP+Fg`gv+w9T.9*iQtn#1^!y{>rv#&R$9;v<C:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'matt_';

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
