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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '5i`}13p|Dx`vJKWm!5cWf/-T,sQ&$[Ip^*m~AyW+h44x3Bqli4AIN(:4S!Uj{4$8' );
define( 'SECURE_AUTH_KEY',   'r%A_=O7Tq.h0/jX27=Qp]g3Y ,jixxZ7%,HhkE 5~G|A3EOkISdS.KRtn+pG.,F6' );
define( 'LOGGED_IN_KEY',     'JwEMD%Ia rs2]pzz35HJ]#^f=RiDDrh|)u[hGO,od)D~r<D6W<`rReYsdv1sxEd|' );
define( 'NONCE_KEY',         '/!xxH1~rU%@KaVzqZ6I?0&>IiL~=(7+WxblsWDpN=vlxYS1,F4i ai)QVug<mA1u' );
define( 'AUTH_SALT',         '&N-h ;}Vy1TTwwO44%=(FRXo!Q%I6A>YAf<J~*?bnli4Q&i.(#jd,` Wp]Io%BNy' );
define( 'SECURE_AUTH_SALT',  '2mUYxq:|B7g2/[4n!Yfx(bMr:joh8|=B*^?QqX<N?7+PjT*gu&31v`$@hUeH]8Fr' );
define( 'LOGGED_IN_SALT',    'eAv%;_18z](YKk:$p`z<;#;jgfn. @}#i}i_@b/xv-H(?C$lhXET_$mu`{C$0V/[' );
define( 'NONCE_SALT',        'fJ([VO1KY,$$m7b-D ys w{:Is&f8X5$vsQ|F#J%mY6sZ0X5B?[xg9v&QrxE,$$3' );
define( 'WP_CACHE_KEY_SALT', 'n?rpf7guBUz@Ql:Lb8L+][8jBQ+s=QK1^gT_JvHA>Vq-d{Ao05y0x63R<<cV}JSU' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
