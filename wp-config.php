<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'nU8 n-7v8yw&CztPE*5(Vwb-*c5Cm#l]PB@ |E;?r9OhS_$V-b5})/w[X8`b{kU-');
define('SECURE_AUTH_KEY',  'E^.ZVN~fcIwl6^[9s>cejk($(.qB6y79HQ|@kiY=}fh`DZf!g4s/iFIi!Qb3uA~,');
define('LOGGED_IN_KEY',    '~[2U|/k7g(;TOhZ%]w~nS&GU)|=DYxku{&epi^ _|q[s!G4$|P3IhV,beT3Ba5E3');
define('NONCE_KEY',        '0f*pm6+;+QcS:4)#V*c><*]w=-%@p[fFs{<{?9$Y7fwxuU@]&p><B> >xuc4!{pe');
define('AUTH_SALT',        'gWw+?GEM+{tC:WOHqz8h>AdGJy~g,`i|^[1lXy^VRY;Tw,IM+|:x(e=kG<CP`a{S');
define('SECURE_AUTH_SALT', '{5lT=luo&X/=lP#JY->k+Xl>70.m4:a(d^:F<++J1]e,~ca=axd0H~=WY|t&](S-');
define('LOGGED_IN_SALT',   'y<IR#|2+uwjgti~w7EMCfmSknXv[jhfuQwoR!+8.Y`;`aqW~uU_t(lu3^)7u|Z4:');
define('NONCE_SALT',       'm-zQTx@Y09)yp|}y8,G|Fsjg)w--T@A4CMc(io54oEYGXZZT^Rcvc+:ER0Vm)%$Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
