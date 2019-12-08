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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptuto' );

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
define( 'AUTH_KEY',         '-iib$nlid:pz6#@<HF;>]|y45bg x0!MtIeW?4Vk)H9B6<k56dPg>}j<_i=,zmhm' );
define( 'SECURE_AUTH_KEY',  'Ao>+DUB5r=NuX<qf0Z^xlDmoO#hVTCOvD9oKGQV4wn0?7V3{p^S8da%?r|&Ic6xv' );
define( 'LOGGED_IN_KEY',    'MR&g8X:L|nf/L`:iy_A86kO*.B<d0*;Ep=dE4->}ab9:kw? `;K~Xrm[Zh(m,P_z' );
define( 'NONCE_KEY',        '(Q8~ckkp 06|hqWorSb8_3nx17c/lj]jgZ-OndNt6bhdIY+xV:aXd1yj+^?VOr*J' );
define( 'AUTH_SALT',        '#umqI1[]*%EA87ktMK{PN hsKT[gu.s,8sB+f_3m@bJwnNP;dm9q/ERQO?aK&`Zp' );
define( 'SECURE_AUTH_SALT', '7jFA:z16v10hr)P~&TLWe2#i#[w93FBLR$-p3n{? w4a*;iqNb8qb{rl]d_F}xYq' );
define( 'LOGGED_IN_SALT',   'oJpl?i;i+[.`h82EP7ZBb6o[y9kZD6KHL.M`i>BAg]?/8u)!Ea4?Qz{>u3!|zNmn' );
define( 'NONCE_SALT',       'F91;$/}IcG/@J`gG^UaIwb2sBpK:Q8caZ$N3M),R.nNp$0N3%ZyBf)F,KYuL$fj(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
