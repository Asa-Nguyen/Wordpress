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
define( 'DB_NAME', 'webhaisan' );

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
define( 'AUTH_KEY',         'nv%qvkECBhu9Avp9X9^GSSsr/z[_(Kd7[`-E[ n1H@32DM8%M* YuGt:1KcxaK!s' );
define( 'SECURE_AUTH_KEY',  'Gazf$7!{0K4YKoE!]rReL:_]>}:rDW|tCGoP-A/G.cj=[RnP/:]?:{bxx0e.3U;8' );
define( 'LOGGED_IN_KEY',    'VzW#<+Y:UV]_-^53D&B9-IK~Z_AFDc7V#kQvSG$6QH>h.4Z54Zd&j&y;=5W9N|NW' );
define( 'NONCE_KEY',        'wh)M_Q-C5kYKO&]#;702ujzVyp9u<rI$O&Hz|pD>DjNO0b0~M~Z7Py,7c/(2To{F' );
define( 'AUTH_SALT',        'Zz/~msT}$;awW6a&,j<_*YqR0yqPN}qDX]dv8X^10=r.UG;X1!vvo)TLgcjp&fs(' );
define( 'SECURE_AUTH_SALT', '8QbR%`CN|XDqu~lU0~j,1t(;aK,mlEESvEo%(0iE!_0!n5qt)@!cYVh}McOZ]%y*' );
define( 'LOGGED_IN_SALT',   'RVrpTOqH0gp#L@EH5nTS)IOK0<F]- pi(Qv$twu9=W.cHs]{_k`_u=!vGk?yC=}}' );
define( 'NONCE_SALT',       'hE=T4F.L$m-R YY$<z+LOB6mla.@k|RHd3hBx#8J7jaI#q_.:*)Zg~YC2BIe?FvY' );

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
