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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teenmind_db' );

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
define( 'AUTH_KEY',         'W@ICW?I_&Yi95&b/m197h:uD&|63P1yNJIiz7fEjHg*F(PwRw<0!S?2Dijo,W@X-' );
define( 'SECURE_AUTH_KEY',  '%ZS1S4~^IVW^tkM1ID]NM:J(.p==K20n(qqU[X6acTYVLU@?3s=Xj*zU}tX2D[_^' );
define( 'LOGGED_IN_KEY',    'tII<0jP+C6jepjg)JwE&0NbDSxQO4l4D7!-ubgQ)|#zzu:B%V&YUyMR)L^rkYXC5' );
define( 'NONCE_KEY',        'Z*iFlne:fVH7[NB 8=YFq]&B<`2azZ&+Bm}nk&CR,a{1p;Z[%Hn/o!l:5k XCg4g' );
define( 'AUTH_SALT',        'LlmhPRYXA #$Exp.!|kSjI!SU[g71$eo%ER&r^<a>q_x<WK4f2])+qyiC-!*kL5z' );
define( 'SECURE_AUTH_SALT', '$WlB7F1bs/Z;l#Dx !&n&$5TvuP h7pX}7ElE-rl0#G&4zBd8M9kipi6w/L9%bZ]' );
define( 'LOGGED_IN_SALT',   ',,{3)mK)E-@MY& -cm_.N3%7+dg:Fo BhyXVnw.td>F6vi)L~)$wE]z-esjq%==W' );
define( 'NONCE_SALT',       '|0sxlUPmVr}sQ8Q37,Ss{,:iP/q%~(~nMair@(N6Wbc$pWT}{7k?(t3@BM7m}!N-' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
