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
define( 'DB_NAME', 'locusdb' );

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
define( 'AUTH_KEY',         'exJe3/)^.m:+H&9cyYZ?TAn^7!eY<R_eTVA{>79P|lKs}Q!^nwy64^OK2A&= cl6' );
define( 'SECURE_AUTH_KEY',  's?hkv_F@kC#VGG0HE>8hN?:`N5BcPr1eilIEz`j)a:P*o[b%|~hB?x;=Aj8XpKzr' );
define( 'LOGGED_IN_KEY',    'WwqJEWrKbQ4}fj(ruun}?q!68~,QDQo7)v9ho<Zr:D[;X4 R#pB%RBX*]urGrjnY' );
define( 'NONCE_KEY',        '*xW4Ab]1iitdJ_=u= .akgC;kUo!PmN,ZcitqG`UgVH)c%{1D_fo,+)5,%SAu!. ' );
define( 'AUTH_SALT',        'H0U#4Md26`W;X.2BCl:67*H*p*|k3yr1,0]U3G.x/d.g3!%Tf9 -Io1[UOo7*oA@' );
define( 'SECURE_AUTH_SALT', '=%Ed:N;Xmf-uu_Y%e#1<N.x$xz?{?|8A0toJl5Xj:#eyY8]:]eUO-KIy-.B7K#~o' );
define( 'LOGGED_IN_SALT',   '**uG]ddoY|d/L4*@}>Uy}n/HMRemF]S*:Awg8a+F9h~l(-/Fjn=xA1Yk51n^hy#L' );
define( 'NONCE_SALT',       'g5-UF;`97s%=KJHcIV,GS6b9g5DlRL#mOPUUO*@b6zdLDUSYF?m36^=DTK Da77O' );

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
