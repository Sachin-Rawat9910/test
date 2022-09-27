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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         '27e~=$ysV}tM !$RbeK/x^VRa_[A:T_=/iB#|[%l+/bT^b(:!+V#m@3zQ+i 7aTw' );
define( 'SECURE_AUTH_KEY',  'mK5H9Z}ma_Q!y$6M=e%r:I:#E3|8ktr^B)|imj$ 5jQYf(pO-1yc7.fc sVaM1Z.' );
define( 'LOGGED_IN_KEY',    'R1+dz1K{f}ClLhV(di~;5QEc[M#0;1j{k90!^!/XEED<&WPoYO[ i*N1$M@m7!NP' );
define( 'NONCE_KEY',        'X-mbWlY):_Y+&N%:->W!pTl8;GYb9p!|WOOjqe33v4,N9gGTZ2TZZXG5DQN+jBX8' );
define( 'AUTH_SALT',        'rE?h<kDV5W6J{Q[NVzy+sMRbr7sw:X51N.;POZF, tgJ~OEJ rKc#.h;@Z-Uq85T' );
define( 'SECURE_AUTH_SALT', 'A!qLI&ImkR?wtAlt%J#; g!NOnR!?j?KW.A>Qu*FWGDS)zmA`AZyFv+:L&+Eb.)j' );
define( 'LOGGED_IN_SALT',   '$0PCiT~#8pW)ttj*GRp,jg%T|@;hseHH??Ugzl-gIU*R?E]R~%K_Ho=r:_lZXd?I' );
define( 'NONCE_SALT',       'kfieR2/yK`al@QgHPB-P#{bDp~R98r]&Vy$[yFo})mCUrWssh/WFD&BqfauRC0tm' );

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
