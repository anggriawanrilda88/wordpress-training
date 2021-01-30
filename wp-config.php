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
define( 'DB_NAME', 'wordpress_training' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1qaz2wsx' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'g>{d]u{YN76pjep@&I.Ib%ybFtO/Yq5X[u,VL,avYK|tv,Q-B|UdE)%f^5*>$;;V' );
define( 'SECURE_AUTH_KEY',  '{l$XM?0{;HQRBzgtY/B$H:j<iBCxN,hGYozFfMw8iivG@stIpA_vp?wGySWF8R5m' );
define( 'LOGGED_IN_KEY',    'GSMdzJMUfMyE/ZkRrhF+Q4lJ:H6{W_*BB(LR%vh<gP#]CF/&7/##!S$|W N9~Ik-' );
define( 'NONCE_KEY',        'T[-=c/?tZC ([P1:SKuV-/UY ta[Pa4Xu=K(L$-&aRjWcbZhkE<5Z,<EkJ&QP[<X' );
define( 'AUTH_SALT',        '>t_mKp4JS8@k3|yuZ5KCRq?jL0uXV:J}I7nMzDt ,MAqNE+zX,0kh}v__1>)&Ftl' );
define( 'SECURE_AUTH_SALT', '9V)`CCJ2Wz`|UrLw{*exF2uDb:}[,hL Ls>7S6x/{Nt+w 4i#|X?9cFsS{YKmAu>' );
define( 'LOGGED_IN_SALT',   ':Nmt)x!yE731ayrkkOQm:pR@gm;ESY-SX2jjUIpFRQ,O:w!.BpeEd|,_]*93>}_t' );
define( 'NONCE_SALT',       'Vxs$dXHs!vL^s<#5zvBQVy!0uX-4AW[CUrf?&m8AF0lhs|o0et^l klO1y R^MZG' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
