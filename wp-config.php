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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '5Oe(,EGx>:8LaONE,ZQ2GCCJi z-$<x:3Qw3%gTK}]KT2PB8&k[j,@[~EtxERGvI');
define('SECURE_AUTH_KEY',  'g&ZJ^cS] -o2w3KNi^{#HUS 48$*M[I8RsMcy-~<6QX,ZRB]se,mM=qTGsEwt7WM');
define('LOGGED_IN_KEY',    'l4Y%*gM.2n`:{@|DK%%N%:bwVmai+FiFI+h<E#{}sJZD#g(jV!qHA6a]fUPIx[fT');
define('NONCE_KEY',        '~w8WH<i$S%SoQ<_jlqHz9#S)8oq&/_)}W`$Q|}=I#_L/$=xQq**<vR~$w*iWFNYE');
define('AUTH_SALT',        'b~%D5h=+S:i}C:0Z8^Nt}axZ5%pp:E@}M66~GO992cg>0tP==2vJ7s]VZZ=fbxyj');
define('SECURE_AUTH_SALT', 'Y|P;M<[a?>1 > &kP-I:>;X.~v7Uit4SCsO~nR;8mf(Yho*rIJ4Vu6jv^X1~ M>|');
define('LOGGED_IN_SALT',   'TGMJ;Pv7l$@, TcDV#9%-G</2Sp@?hp[3/4pE7wj`>D;WSm$^BCoYqJg*Z~`)3er');
define('NONCE_SALT',       '=Y R7Y^Lgp8=q31TE4t5gSRpA3^2znC82qD?Nw>ASZ[njH6RU7Wka<-{VBObWela');

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
