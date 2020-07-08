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
define( 'DB_NAME', 'nutrition_and_health' );

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
define( 'AUTH_KEY',         'Tz;}Iu;3>Uu-H?db:TTFF%8(]7a@d.9J;A9Qp)fKkY>kp;6fF3.6+Ms}Wqtm>X$=' );
define( 'SECURE_AUTH_KEY',  'm{dK>G+.HA8~h>uc=hfbqnNK<*XF&H-a:V-1}fO9i L881k{&=PM}ai//1!LHqy3' );
define( 'LOGGED_IN_KEY',    '2z9Xm7-p(-#rn G6{WRnqpo8eNY8F7mX!@o<kCK5Mcn3FK/URyg^81xZy1ts{<rB' );
define( 'NONCE_KEY',        '|v$wx~mK^KkrPsw(Pe6NoBBceBWC+;UH-3rp-OQ1w:K,*.&%OSC0l0S--t8T*IP9' );
define( 'AUTH_SALT',        '7,iej:(n5dP$x,h2[@w1BEY)9WrbXkz:vnfg!PC9DH-m9@_u.<N^bpUuk9,pXG<y' );
define( 'SECURE_AUTH_SALT', '2OYfp7./k4-XkK9<DVrb/`E966t>Xz^0MuHvs{bLh3l<P} XSobpeXzt>4wVe=u7' );
define( 'LOGGED_IN_SALT',   '@eZ`>>NFX:Dqj EcVvQiChO(]2sS,llu&L!OcZu8*$G#s`:Z`k}LcVP-h%4~onyk' );
define( 'NONCE_SALT',       'wTPvG%{,GgS}i/UIvW?)15f*+=uX=_R+sY34b+/`Z)!DZ*k&m@JG5QW<U>:he2GK' );

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
