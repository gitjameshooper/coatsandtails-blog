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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'coatandtails-blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'medula123');

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
define('AUTH_KEY',         'H:77|]2uz1A%5?lY)yr7Efa{waS=Qt&h=cipqCw@]0WyK$>aQO,DOi@LW$i5oXB%');
define('SECURE_AUTH_KEY',  'T<M>$T^{S0F5_yUBiu?i1y<~%@gr(xd6&VCY+z$yjD)L|},6rT&-AS+0lq>,#]3u');
define('LOGGED_IN_KEY',    'EVLz`91bgHLRE-NuFwwfl)V)^9k?,0~+z1;[dO~H&yyC[Y/3kZ]YXmO?&_4kT5Y&');
define('NONCE_KEY',        'wDe#7U?s-YZX6paPu.rOD-I!5b+Me3{/_Uw-lt28+My}0PVG}gz][RtHAS;xOMiW');
define('AUTH_SALT',        '8}kNtGU<rVNp%07H`FnDj$pA ,emO[Cdo[m*)GE$I8hXTld9JS`x|V/wg0LwF%jp');
define('SECURE_AUTH_SALT', '3sKz&e}WNXF#]hI3c2~))?!emxow&:U*tK|%30K&G-aP+W!($6)B+(cJqf1R4ugo');
define('LOGGED_IN_SALT',   'J:QI$UGBq6Xo5+&KBh@w)$9^A&x?`+iZ(Y1og[/JQ{s_YZ}m`^)/5*gG#In6,/B#');
define('NONCE_SALT',       'P<t4:Z0=Nf7#Bw?pT50+!`v,pWYHcXiqU^`cU+l<hflL`1mX3dcSj8zvc:CCCW3>');

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
