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
define( 'DB_NAME', 'local_ekm' );

/** MySQL database username */
define( 'DB_USER', 'toto' );

/** MySQL database password */
define( 'DB_PASSWORD', 'toto' );

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
define( 'AUTH_KEY',         '^+.Jcg $6g27mrfBBD#1,vS=oX:tIOuN(+qQbNbKACE_MudQ:YYaU<(p+H_,dZYT' );
define( 'SECURE_AUTH_KEY',  '9fcted>HtA;-1!Q-RE?Q6rI:&Jy<uOZ[WK6v$(X:~;oQ@OV_Xd5@aS:;X6>6D9`f' );
define( 'LOGGED_IN_KEY',    'xQzs3/+J)&E:W:GDY<%^+/!*I`@WRSlY3S!v(=<0)xx!tiG*H3*Je 6GWOe]98?^' );
define( 'NONCE_KEY',        'OA,xF`h2xw|E%>gJYYyR*r~vl$[.k^8m G![(vD~{4$W>wEC3f>v2eH`Oj6Ayxmn' );
define( 'AUTH_SALT',        'RO%9m,cTgD6m8V~?3y2+qN{|_t?07Lksj4TQ3WCeJ_3;G7@@CZ.B$maICi^(LLk$' );
define( 'SECURE_AUTH_SALT', 'o[+Yqh&1`F*.>T;akmf+?J%TP*KpBfxvP@%Z[|29N#<7i+w@$/&u8#Y^i0[)}N 8' );
define( 'LOGGED_IN_SALT',   'K)C*x<nN|j-8`H-8FO.0~K/>rB6MBY)>^hKks{}C>{C~Tk5EXGg:.^9UT}%:~GBw' );
define( 'NONCE_SALT',       'XRFxpfbaL#?A|%|2m)oX+AK>seWUx2U8?i;g&-kxgLH({2||R*jv0/[7wj2!mG_1' );

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
