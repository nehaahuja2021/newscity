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
define( 'DB_NAME', 'wordpressNew' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'cb,R:k~^X>:Z?t @Pe9c1FcJ|O/R`{I.gwlv##~gfs2TqF2]<RZTE$B Hb:3Smk^' );
define( 'SECURE_AUTH_KEY',  '|TyWF}kp*^x4;b3aCnHgZ$|,O;X:M0eJ5ttW4[U7w>?$Qk#H)EZ`(>OGh|/;Fi!?' );
define( 'LOGGED_IN_KEY',    'k*+TAj5^o-cPM3P&|.:~w+P+DqSBm0=[YyHy;-~yj8TuERb29qB8U!R^7cR`M[]Q' );
define( 'NONCE_KEY',        'b^3A4g90^rTaS&U%RCJ.By$}IyHcTC{,5i4#}>5M=a4<-YO~Qs>Q?U+z.|a)Nf#y' );
define( 'AUTH_SALT',        ';2Zx).?i{CBP_R]xgS,V|/)KC(ELs&-L$w[)lC(eJQbxX?FQ9s?`=YeBAfS{!Xl.' );
define( 'SECURE_AUTH_SALT', 'e1.e2 .rgF}G9~<6FcoxV}pk{d@*CrjTzBWy0pr(iI2U.m}<)cg0$v:jDfeUU[U=' );
define( 'LOGGED_IN_SALT',   'QJN0a&r[h[&z>pTEY~/xh@x[(YG*(4jQVEoe32_>M[7y_!(.HX@W/zVSozDoIOdL' );
define( 'NONCE_SALT',       'Wd`G%ryJ|(,d@->4nzh@:Tg*@}ss5K+5<I|%peO@qWQv4T/% N@cum&8%9~Y@8&?' );

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
