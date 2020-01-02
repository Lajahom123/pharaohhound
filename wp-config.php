<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'wordpress_1' );

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
define( 'AUTH_KEY',         'l8&ll+THzL=;9gFXB0R:H Oj9VkYK64]hnrz(Pjd)0zz?n]QI,N7<@iM!A=0@DuP' );
define( 'SECURE_AUTH_KEY',  '$5PDrvO;(t=)8~Tx:AcyvvI=zXr23{&[qoArBbW_X.K4H[.kpFTAn|l}e|Qkm^.4' );
define( 'LOGGED_IN_KEY',    '0|v&b%J_L|l3Id}3:CyV#V|<tEJ(szKOI6ucITEfS&v<-,?fGF42n|l)R^SwF[|!' );
define( 'NONCE_KEY',        '/ez?HOj,!O4NBKTJ|&gE`5pwY^eP7j{,/</g~L4r&:#I3ug_C}l-s%k{h+8./E,z' );
define( 'AUTH_SALT',        'Is1|{CYVei?!%WU}C ?W&IOhDR/+@ZdRe$UV>^24o^:k-Wv GRvm-H#o?i!7i1_a' );
define( 'SECURE_AUTH_SALT', 'XpvLEGW5m]y3]^zhnHdH77LE)$EWfOlH~1|yEW>[.kyL_V<GTZ4y-WKC}{d%oPUb' );
define( 'LOGGED_IN_SALT',   'i%?G}YJgJh)/H_i=|M&YGn5p`Y=w[n*<,V6#*x?DBkS=^U.<dR}GUTijZNr]l7>{' );
define( 'NONCE_SALT',       'dv!h)6XkVN[8ZNQu$[:6JvNJg`h8ryu;3Xw_YHB](D,-|mP6uJQFRuAePuI.b+3R' );

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

define('VP_ENVIRONMENT', 'default');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'atanasatanasov' );