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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/NickGordon/Documents/GitHub/Sites/wp-nelson-mandela/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wp-nelson-mandela');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'IgvC^ZE$GfML[?nMP?cM4Aj1GjXjsT3L>%D=QMslUEq&4,=,HI$aO}@+F-c{_ort');
define('SECURE_AUTH_KEY',  '* $qx9Z;5^<pMx9xtH?>IjVZ4]H2C`*&OBDf.Fg[];-5c6UH<Kgb#33zP<7+Oci|');
define('LOGGED_IN_KEY',    'F//2AhuI=D^5rHoMv{U0/|E*Kiop^^-Ioy6cb&@RP3s6(W`[5.pa$ilX7HU*@`Xm');
define('NONCE_KEY',        'VM{U}Fp-,Vy$}aE}yOQ_z7?kmg6*/l{JO#F.U~-?Z0)%5v|%yk4_zAdM 0 ~/YrO');
define('AUTH_SALT',        'f(wi9kGjK:[c0lMutsHp57b61V:?Iupz*JeuYqk`PPr~4gLg_:)z_vr35j@Z+(dL');
define('SECURE_AUTH_SALT', 'uxzw`eij`?+Jh020Gg$CrR{=:(%v}9#rj6=1KK$BsUL~2|9s*,_-1X3WFwNL>1|D');
define('LOGGED_IN_SALT',   'QgXjVB1~eb{lR1OG ao!2q/Q;,3|] mT@3-fJsWyjxQ_lrbHZe_6<Ifax+i=~[&:');
define('NONCE_SALT',       'u:0O<?9HFM#FpfC78EAf9%5Nk 0BQ0]*hW#}-)Dqx5UpVu&Xfn6j{H>WJ/KgV)P_');

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
