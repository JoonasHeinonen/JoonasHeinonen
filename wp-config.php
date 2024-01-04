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
define( 'DB_NAME', 'joonas_heinonen' );

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
define( 'AUTH_KEY',         'nc%1 `J (B~8n^F1!z&*eiKM!k,u^}CTDEb1#f]N0l?SRZPl2nsZn$[2,l@ysjI~' );
define( 'SECURE_AUTH_KEY',  'mt],hF=Dr}PI(4?*wD^&9c86[&bW?Vtja-qrmR%StTY]A:eR>jjpEW]9F<v<V%Cd' );
define( 'LOGGED_IN_KEY',    '?>CrbLe8;pZ)kHhtjJiy/zM{^cqq,S}Eh4rTxhs;+hA$>?q0=dWKAXz{2*00RWk+' );
define( 'NONCE_KEY',        '6pcXluuKIm:x;p~hM]@_4[-^IWM9?u#`$ng(Hy46DF@LKC#J 1$C{R!YAy(E+cxl' );
define( 'AUTH_SALT',        'W[Im-WPiCZ]xmO3l4Z]M3%Bb)R6Z!;}pSZpVaQ7r3JM;*(XRO*`9tG!qUf5+XU42' );
define( 'SECURE_AUTH_SALT', 'f{C|>s(+RO*LxUQ4J7=GM9E-C$cwq.2!^1ziSp=kZ~mwf,A_ErzdTCiGL=2JGzJ>' );
define( 'LOGGED_IN_SALT',   'J*VpiO1dC(K~CF.C [k36l;2uP]oGg>G kIhucw_hlo$).@fC4dcU/b#)hWb#|-=' );
define( 'NONCE_SALT',       'b]3a6v@!XC0X^Dax!JxtwSn(G=w,Z&E]zS^b)v7`{iHNy)O66fX2SyxT5-fmT,jn' );

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
