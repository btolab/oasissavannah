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
define( 'DB_NAME', 'oasis' );

/** MySQL database username */
define( 'DB_USER', 'h0tw1r3' );

/** MySQL database password */
define( 'DB_PASSWORD', '7Albert2!' );

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
define( 'AUTH_KEY',         '17{Y?R3>ZZ<fEYU6XGwD`+p-ydH6L~&qu`NTV/gL]C6:&y~RJK~go!Y9P#7#heH`' );
define( 'SECURE_AUTH_KEY',  '0#q=1#Qrt#^f/Sao$&P79cTvS4EZ17(#h>[^4R::;&=]d8R0m;CovQ<@/qyp{0gs' );
define( 'LOGGED_IN_KEY',    '@a*uAaEx<8S*#Y(T&*Uul$8Rn>M2$7n6EzWy&;DGIY3@x-V<azqcW6u8ERV {]7I' );
define( 'NONCE_KEY',        '],y?jqU$g0)6$C#@h%y+4+EzjnD}8_i<qR;QP rG|f;AjFA_@Zs<dWK|Mf9[O0we' );
define( 'AUTH_SALT',        'rC>j}A0Y|kIc!m[<V>U!47CSYs@&8_}VK^ @|7%V`XHiOOJAgL7d(q5l?w7d:B,{' );
define( 'SECURE_AUTH_SALT', 'i)ZOi++5J7Ja/9+%31IDJ8i0=Vo sTk}8N]R&-QXMhS+f(H<G%hJy9V@G}{$sj!#' );
define( 'LOGGED_IN_SALT',   'haSP/t^fHx+~ J&o?ntaP~.6?P7}uRcUaaV#*W^$i;12f0m~wP<:(DHTdFnuCh:v' );
define( 'NONCE_SALT',       '5K{Uj,V9fm3EM[s&3/y/~1Njy,^LlR{-Beo`}sqqhFFB|a^@c}3|m4j*)XnzeCtJ' );

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
