<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'SB($+m6KB*%hyfe]n6m2yGRN<vQMUi&DR==@:Oa!gm6U!_/r]`kd5=@w&x7~)p)N' );
define( 'SECURE_AUTH_KEY',   'JW?7Bg)&*X]hZ-i[lhfxQDq&ufw~mF`i6>@MF<Q7uRU@pR1[9_0]n{1|_~x>Xqt{' );
define( 'LOGGED_IN_KEY',     '?G6=t#kv>c&``0n?91;^$q~[Gb,&jw>vR=OJ,kzY^:R%g;GcNAQ^D#f;N]07HhSV' );
define( 'NONCE_KEY',         'u~yk*U/g*{pO_[:,M;WQY`,Z@yV7eB] Mdw=ooKKO`C3cW)M74wo:6M7t:E}3-$D' );
define( 'AUTH_SALT',         '6Ja>VN>yi= cj Z%w:1fne+mJ)Z`&9KJ{@Roq-b<:pDP4PN4|h[0QYAc$qJJoUWq' );
define( 'SECURE_AUTH_SALT',  'x,O>X;H`#*vRKj!&`XY7k_mRA-4(,[i.Xpz=RW@(s~U}YG{H(,gddxY.f2PQAna2' );
define( 'LOGGED_IN_SALT',    '>WsFzE:OpOja3OMN4aN Esh]B-L_Ox6-g5=Z^dr_#C=Hi+&yAJSvG-%n4]6oB8B:' );
define( 'NONCE_SALT',        '&yX/*JY*YHFDD`ix^!L>PJn%uu;wAnQ@R5}[Jhq+i5=sj:%t/%&1b<Cf[#9-&{[X' );
define( 'WP_CACHE_KEY_SALT', '>7k5U+w2|O#:G nyyD$/KXba(.*;pd~A@AJ#@?[8Gc]|,>xr]kox< qFD,Wgqo+(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'multisite.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
