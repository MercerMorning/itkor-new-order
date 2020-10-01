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
define( 'DB_NAME', 'itkorold' );

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
define( 'AUTH_KEY',         'uy[<E?bgb8[^5FL$!}5Cpn}R5UXfnH!16>hvG$`vxTqob2$Iv!guK6(yxIm2> =c' );
define( 'SECURE_AUTH_KEY',  'a#s3Tv=h:~H /<AQYX32VT3lf}%WA[c$BP}.IXVy&*)8.x?TQ<V{5 o*,XA[6jZ>' );
define( 'LOGGED_IN_KEY',    'rR@xPW34e@r3uD-N|!lRU&;EEa7F;./,$@[<K>c AMHFay3zd;J}YEZ}(l}&_Fs{' );
define( 'NONCE_KEY',        'kr2Us(6`_h~c~siI<k{=~`i5c!/OC]7PQK%dJSDi|,u>*I&_^@3X_p6}p$dr1:rk' );
define( 'AUTH_SALT',        '{@%]!dvX!6lZ)J3Jk|`(D _X?rtfMaQrabp$WdmlT0R%TO*Q_6Oe_kxRCLXh+9|w' );
define( 'SECURE_AUTH_SALT', '0{]aY&0gyE35bG{Yi3;HJX1AqmJnf_[HtaL`C|Q{*3yi=8c|]>|wo6l>-XC@up,;' );
define( 'LOGGED_IN_SALT',   'q@;$YDG(&AuBY#eE~Q+qWjXUx&-VN6DDpW.=BA7!bb~f5 4b7~E8dbu};C)WdD[|' );
define( 'NONCE_SALT',       'e71&1Q`3&5RQb:(C-nD{nm5dQD{0*MXL#ZQc?]9uleCxTDu6_Un3-)}.A3)/`rvd' );

//define('FORCE_SSL_ADMIN', true);
//define('FORCE_SSL_LOGIN', true);

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
