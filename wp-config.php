<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_pro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'bs]-(S~v5C}}`jVTf{f*4iUS-!:!/c}&];P>{{)Z#_m$#g3?4+H<f5e3~w&JWj)!' );
define( 'SECURE_AUTH_KEY',  '6qfY@/ :~wzH)8[]JVG#S[n,}6_]zpA;KPMk96{?z9:o`nUqNo?h$SpWqL,N=e/ ' );
define( 'LOGGED_IN_KEY',    '_B7W>t{d7Yq?N;0h(w4LlGh;hZ12raH)_x|vB=p/jI7-c6@y~u.Pbb:r%ZkKo.3M' );
define( 'NONCE_KEY',        '9cl[|2Emi>+Q80;A2v289[e2EPo1*~>7IDlZmJI [0if:Kl(O+Jaj? seM^t,UM6' );
define( 'AUTH_SALT',        'W,LE~umbb6tdC2,bYO!i}s@?MvF/A4ehUx#MHdGu&Bpk6$O,|cgcbBQS7UBTv54,' );
define( 'SECURE_AUTH_SALT', 'CP:%E#4AiDN?3g_t62VDE?}FRRo:n<+1J71H}?++ qjjrNVv6vs$1tFq.?I!#})6' );
define( 'LOGGED_IN_SALT',   '9XS)y+o6#R|h3)*k=+q?CQ(_I*#v8CICw3K5v|i1K>s1tG1DpZ)T[2WAdH_{{a#7' );
define( 'NONCE_SALT',       'kKD!< 7j^mj2=D0,U+?iYD&r*-!~Ha-T%FFRP-GO0^uPh Lc;~G!A`pt]{H(dkRT' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
