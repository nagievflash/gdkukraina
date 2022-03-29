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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '282606_wp9' );

/** MySQL database username */
define( 'DB_USER', '282606_wp9' );

/** MySQL database password */
define( 'DB_PASSWORD', 'j4GYKk9c3x' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$g^B[iN~;j0k1!_}AUtYZcMXM.mao{UbBGwEPy5YBh-R-SvOfgBp&js1#-b[aO5h');
define('SECURE_AUTH_KEY',  'G`-XFAwLXfY2O0$IwE9UfeT,3jrFE3D_po#xZ}1xunbc|,&Cx?I1)+dC+<+h-=2(');
define('LOGGED_IN_KEY',    'zf]&l7Y9WA4S{?q_5,1@(|v<lH^Y(FJUQm~6/)/`4+NQ>GScs?$!#Ux2[X/lM>_~');
define('NONCE_KEY',        'fD&Wn2LUVH-Zst+V.jW4oQ}g&_9m#B[>b+Gb~=@6?AY)7<uYX5/6=.KHssB9A> e');
define('AUTH_SALT',        'z1tq4p|i9^qD:RV7S/-b|)O1{#}c?Vlw1j>_<^()X1Vi30JMtDAF0z-&h9aU3RNG');
define('SECURE_AUTH_SALT', '1SD.wUZ2,R~a|R9}K2C^20I-,s/|m6ZD5TsFm$#5O>Wv)hibMO{E_pmodN]nla#A');
define('LOGGED_IN_SALT',   'N.`??lJHiQmL.!,}wj7u++,Lq6#%3<8b`t+<ln7:,7$0 HooL|#Vb_dhoX#WWo;R');
define('NONCE_SALT',       '{Eq_/D.1`E{9]%%$,vKucTlA^kesq&_aM:cm{HESn]{^6gN$,MxN8xNz|7o~+1mD');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';