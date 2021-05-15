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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sachin123@' );

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
define( 'AUTH_KEY',         'dU#agJmF=i4H*~@f}Be#%}[wyFj!ZW rPhRwo@T4WAzw~ySFrxuT^ZFd,z9j4lEK' );
define( 'SECURE_AUTH_KEY',  'I/6+E}jI!X:HA1CKixV{deb6xG=p(@4cLhkxXrfVQ4|lB9L1!)Y6M3-+:(UdF3]h' );
define( 'LOGGED_IN_KEY',    'Mxx[@n _7>c$),0t1x.;?i=>Z%x]hY08td@t~X)g1#$1r?:AXOXmZDCBR%TE! %[' );
define( 'NONCE_KEY',        'D`Fy|$o^p4v4sQ ;mmQmU=OS=[/a{:V~H&W4dYpgEBP-Ph|IK%-(^vdNT4?f(y6K' );
define( 'AUTH_SALT',        '}`T| 8?N}SG1R}EU$dh7~ITVX^[60r/SHGo4iq:3]b)(~v5{bz@2m(D8e=PNXzG(' );
define( 'SECURE_AUTH_SALT', '@)C0W]4!8I]`/1_4QdpSl{Ti>N~){|}CWMU9h]T573*#VICKIns[s6KnhbbHsF.&' );
define( 'LOGGED_IN_SALT',   'A_-qIWS~{P{J<IlKJVsj?77!e1>D&82V5)9]~P$[?OOc.bZYtq|6>xOvobMJw4Ga' );
define( 'NONCE_SALT',       '#UWZU.jQiLdpP/!zzlSi*LwB q `tnnwy3eR`eT.So|/;d?/r!$G4$H^nfkG9Q)u' );

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
