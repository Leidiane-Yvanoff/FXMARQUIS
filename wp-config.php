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
define('DB_NAME', 'FXMARQUIS');

/** MySQL database username */
define('DB_USER', 'leidianewp');

/** MySQL database password */
define('DB_PASSWORD', 'Loxala81');

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
define('AUTH_KEY',         'o#%z={*<:Kp+gjjbMmjl?Q||U`l~z9/ }f4.^Y3{T+U|ytemANY{d,=s?eSXbsIJ');
define('SECURE_AUTH_KEY',  '{qPNw*q{O}vNh0n0)EB]R_--h&!$- O.PM0FhO%UG2SzxCpvlBHZ}/hrN:xSrGqq');
define('LOGGED_IN_KEY',    '3x}_}HI]xD]`km7ZHW))e3=rmSU^W$gGB`$[glp16Z{|1Xom5.05!-,rv~dbsIUS');
define('NONCE_KEY',        'CK(QGs~,&w^c##^S(h;D F9<hU69;,A<Bt4PGQoaZ:7i)0*VJB%2riv*o]r%v=<)');
define('AUTH_SALT',        'FO+8g1Gf5!lr6u<?30f)o{v:xd(Fa5EwtoIeOpQuV@}<K]?L|bh:0IoW!-.23sT!');
define('SECURE_AUTH_SALT', 'EKL3h),Kik<TwjW)k3_>*k>.T*o$BHq@A;&h|(J(gC>x?<d@ZhjWl_aA@* V} 9~');
define('LOGGED_IN_SALT',   '_tea)W?:&PniH<Jx!`km67vCSgl($SW[km6vVNxf<}pf6;>|:_h)c4|ct[8v?hUv');
define('NONCE_SALT',       '$d^*@O]t5FZ3m4imtoJ?9wZ/A4eJu5mK}UZeW]h1=+}(bZIrn>%vf(Y.X!YL5n0^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fx_';

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
