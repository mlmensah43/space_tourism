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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '&>}d0cGZZ|[<B/@!|+RIH-?Kpt #:2>Ybd.{`o-r=Qf,/qi|G!}Qn2!j!jv*=ZOe' );
define( 'SECURE_AUTH_KEY',  '<Zj[3oTXEx3_CpdBAl&-!W+4*Et0?i5J[^Qe^)TJMA&ASNc-C=T=E{0}U&DG<aZA' );
define( 'LOGGED_IN_KEY',    'o^5mhNJfF;BC!CR/[&@|E^PZCJbQ%gZD^(2g?QkK2!dD:V)`?WJ|.tVze%,A{PJ4' );
define( 'NONCE_KEY',        '~.:(3d>;nJvqE+NPF|#oq/ju!xd?N2F]ZG?DZt&[A8ZY_9=x<a1nE>uk#Pq;5c_v' );
define( 'AUTH_SALT',        'pmf_ )#H`B6CK<+RV8`h]h]+Nh1:2Wqi46yPNej./D7FzP-9 f00ufRq!ku:zYq3' );
define( 'SECURE_AUTH_SALT', '|>@:F?JB!9jl#e)2]N`s&NyThV=K=$LB64p3p,k{gum~IicinwV-k$)fIz*P[BIE' );
define( 'LOGGED_IN_SALT',   'YkmvrRSb}_3O#I=ksY q>9{#,o=(4X=JJI-?R^a1Dz%%59qTIMH=i[m}2Pc)y{5=' );
define( 'NONCE_SALT',       'H7f~c&zCuyw_A_-/V.{DGA+Mh/:u/W^}~c)n.^WbEDdrKXz*Nnr#(v=%5kvT{1BF' );

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
