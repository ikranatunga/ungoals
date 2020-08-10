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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'un-goals_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ptZH5QC1>`I[u__9_I1+$&3/{?c]=]5XpxG-mTt<zBW:tBKQ5R7B^&DPF7Ng%F%5' );
define( 'SECURE_AUTH_KEY',  'UUsA=Y>1/.Moc$7~D^@0`c.`[AZ}iE@HEesW=KPBb5Ok+JxG)v?vC0x,`+HO =C~' );
define( 'LOGGED_IN_KEY',    '1Quq~pC<DCOu,0dXYO(pCOC7nUuK0=jX?(bP`8|&Kp?,[b+g-c_A6+T#8(uW/K5&' );
define( 'NONCE_KEY',        'q_-_83t^o;sdc`E8i::6A3;?U0NVQA3p?ei&F&S`~CW,hKdEKPpl3/on8yYKwRW_' );
define( 'AUTH_SALT',        '?nqLIGAk#6aM$|u0X<|HIRM$*<gs a$VT1WIG60gfuvCLO[=sHdfCS&QBW<udnU`' );
define( 'SECURE_AUTH_SALT', 'F4FKa+0ZCo[L0)cTr[b^[w~@R@][jZ2F.?lQ_~XL&^(7iZ*^aVy[o}c/gVqtgzH ' );
define( 'LOGGED_IN_SALT',   'J*q]RL9}2<%&yzJ5!Lec !jv,[j+Q ;,?MUn_P#.>()!&T)oq.xb4 qakiU)YW{|' );
define( 'NONCE_SALT',       'j:q ]:gI0Bo/j)c{9Kl(G>>:Vcs%p7E=olFO UF%S}LT`K5+xj0<PegowJGfz>Bi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
