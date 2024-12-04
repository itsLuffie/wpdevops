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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'wp' );

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
define( 'AUTH_KEY',         'pit&|d1!C:6}-r4g-U*(c-3]0u/#cTcDGYw,(}FWDVn^ZuZf>iKd2=1Hi._xfJDs' );
define( 'SECURE_AUTH_KEY',  '=O17,qB&w=hfW,D!(8g.wU!#@c$cnH&&3)n:MiLxD},PC[T M>4gM+M#cfn[(??l' );
define( 'LOGGED_IN_KEY',    '6^u9;LHU0c[qpNZGjXa> <PF8wJBL7L#sFRg(:5dXH1D|n=6xS/X9&[f_}},s@}0' );
define( 'NONCE_KEY',        'V,~NF(|(dAtnQapqAKPM JnF4WG|6n@_ekJ h%cN:xd6$u?SD=/4ER<_._WJT`,:' );
define( 'AUTH_SALT',        '{_.U}<|9[x.6/eK=H6!o`@n;R[h}=E5FyrloTtZyB?2],B_OyO?y_@heZo=k,&i$' );
define( 'SECURE_AUTH_SALT', '?[6+$yIq`htkqo76yV6vK)qnlM6U^z2SjO5T85t8hH3[]3KstR3q,4QzDCOOgX>f' );
define( 'LOGGED_IN_SALT',   '2Lx9%q?8/co/Sc7B$]hL*{WbmbG}si<aC4y=eh2@mSD-o~N++jjOWM;x|ylqa#dq' );
define( 'NONCE_SALT',       'z!c>8VWD* N%Su}$mnUPt$Z36icDaw1$A?|e_4T^IarxsN$xv)z]GNdb^}LO569[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
