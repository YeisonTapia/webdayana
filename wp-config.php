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
define('DB_NAME', 'webdayana');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'MN#9[:mk{E1! qRB:qaO&)D(*S7D|-Io^pT,.&3FRo2Q70/B_/s4u5]j1YB;S%aJ');
define('SECURE_AUTH_KEY',  '`E=frEcnC@LXK.}V<+FFb#J7K)mx3/$*7zUj5KZY0E:<3,gaUAEk4Sk`~B|!uEBK');
define('LOGGED_IN_KEY',    'iT#(*Nyp2sfLAl(S!.^qp#Wr]d#WB3|i[T4+4-cxJA5!t(9!Ra*LSF^Rc|:09f/e');
define('NONCE_KEY',        'IQt}04WwlbJdglolbzV2?g;KoG8,Mpq/coV$4])Vp)Kpe)N_QG$Xf}ybkfe^pMME');
define('AUTH_SALT',        '.vJ<:Ojitk;0T.NENY^s~!PAJUKmdR#mkZ~oFc$qq@.2a<W+u}(rd]s(fU::SpW/');
define('SECURE_AUTH_SALT', 'i10,x#9]^i|4Ejxe719y=Y)8Nw<gZL4lN_k>,n[^c:lZ1maBQFv7H]6VobeTs!hJ');
define('LOGGED_IN_SALT',   'w-f_i1~4]eeSM(gZsbDemBKG=<(s3(sy?!Okj]vad3K~y&QlP+!H-pOakm/xm~1A');
define('NONCE_SALT',       'J0eL2UH37d%yzKvp3@#R+yqyDI<m4 Oi8^/AqiC8tKFz5GtG%m*||;*X)O|bu[24');

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
