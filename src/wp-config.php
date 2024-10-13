<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_dp');

/** Database username */
define('DB_USER', 'wordpress_user');

/** Database password */
define('DB_PASSWORD', 'sandi_wordpress');

/** Database hostname */
define('DB_HOST', 'mysql-server');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '(LFi.:$u>1]0.}UOp{tTM3awMc}o]V b:Na(yRJ-K+4)Q.]aVCak_ ni}9 }3UV2');
define('SECURE_AUTH_KEY', '@oeWtMlm9$YTW8oAvnwj P##FVL-w&nvl3K3KeTPeU3]_5<-Pj;%&(^A+:4]5$:*');
define('LOGGED_IN_KEY', 'l5)Hd[<:j`N}~x~b)nO9IN[j:0P@*hgBKSX~m- Jmw7#{wI$QtA3{4+8QbDvf%G.');
define('NONCE_KEY', 'KD]lJ7<Y$aJ-}4Hdrwz~PJfW`|1v^yV$_[C;4Q3[k9=<9n^vvHAn:};3C#8p.PZ7');
define('AUTH_SALT', 'gM/tB9lwL>Wdi({#|e{On>r-ZHn>VKCx)@UE/UdKQTT~mKo`2[Pm)j yLTc- PkH');
define('SECURE_AUTH_SALT', '(], x7q/R.m}/c)K.Ngfo{qw`s>Fb%l7WOFzkV8qS]+}#%%-,*[M&aucWerO1SZH');
define('LOGGED_IN_SALT', 'P-*forN)$@MQGqzC3!m i6jV]f0R-6i1r@aF{N:ogTGw/ya/!L#N.a:2^]xK;pkN');
define('NONCE_SALT', 'UH1y%kW_S9)))BSBBp<Oz0r+`<mY}0^dP^hW~EQyvk2$,V71.mJnP[yZt^H,lv)u');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

define('WP_REDIS_HOST', 'redis-server');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PREFIX', 'dolanan');
define('WP_REDIS_DATABASE', 0);
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
