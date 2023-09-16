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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'A#`T:y$V(^^f)g=~ox{|A3K{|(Xvi5T1wo?p-S.!z^Jsm[K?:vp%H+>N)I!UBm9#' );
define( 'SECURE_AUTH_KEY',  '_@70J;$blI4|(%^od->b!o*&b9ma_qv#_8(fooF< GY&RmayRoA-sgr%b$Y<}Uxe' );
define( 'LOGGED_IN_KEY',    '0jUvV_HT9?3;xLs;7UuB) *b,*%P*+o<Rh$-#55{84JSm 2O~$1:T8CwKQ8bZ_&@' );
define( 'NONCE_KEY',        '7FQQFhFfq|Qp3YTdLi3GUK]~ypKNkmfsKS]^Mf :{Ys*~TQ+6ARPNoy0zA`CjW+V' );
define( 'AUTH_SALT',        'I?6 n,knf9vrfvd^.urxGW,LFJ|LG>LDq+HtMRzn`Lg{T]:xJDpJMK@ECGs6Dr,t' );
define( 'SECURE_AUTH_SALT', '=kY/D&5XXuwV#fVf?93W(U:2.8v>@XeaacCxH%n]}e|BFLWCB-d~SG$Lo?;S1cRO' );
define( 'LOGGED_IN_SALT',   'Jb#NWJtGUQ-XF@yxEqMLqaQ[o4!3ys24=bQYUOSOqsH?`z=OUfp(<wGpxQ),aIWU' );
define( 'NONCE_SALT',       'O</BrscT!5%ValcKz;X$pEbo^.t_Dw+nH?_OO5d=-`$IJ>{_3(i4_I0gWzQHdBb^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
