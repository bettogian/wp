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
define( 'DB_NAME', '######' );

/** MySQL database username */
define( 'DB_USER', '######' );

/** MySQL database password */
define( 'DB_PASSWORD', '#####' );

/** MySQL hostname */
define( 'DB_HOST', '####' );

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
define( 'AUTH_KEY',         'zb-Cg8lD&w8/}[.z3:9Ip.c_mhNR+`beIAEn`B>CEOA3`VYm>)qSNtX#R!taPXSu' );
define( 'SECURE_AUTH_KEY',  '`CD>n+)U_T/V(pwz7/ JJ|LioWYe`[<rsKj=(lzM<Y<e[kmh;?t;j!|WsUf(P*W;' );
define( 'LOGGED_IN_KEY',    '~d5_^^kcf6!;v[(~<+m;d0Ho|~q,JF6: GpfMeku9boMo.RLD5mrywPZq](9,xwh' );
define( 'NONCE_KEY',        'zoZ3DM2V0CKJv[~!o$],MGP)9Dkm)+&Jh^Qm$#GLesSugk]xer(X,|^Z5eo<ZysH' );
define( 'AUTH_SALT',        'r}Q]JYh4?$O2rsq}L,Y?5[tk]B#<e2*g+/V_`QTlt[8q 8F8W1RFO0V6O)Esf=rD' );
define( 'SECURE_AUTH_SALT', 'D]Moomm+j.47(|2]}?lFKk[%|_0@f_Vxl=[Xq%U*d`nLi^~Nh2/{Uz@%q+7=<HXJ' );
define( 'LOGGED_IN_SALT',   'Y$Df.t*&Q6yBrt#vMb6QNe_)]brE v&-xUKIa$s7hi*`3#ef1zDhAh~9[q[$bxLl' );
define( 'NONCE_SALT',       'BB+8Gd>}CXs:|+r#?o]@MB7$NwJi}@tcr{95JLQqXM)A/Bf}.LHdPa;6x5NzAANs' );

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

define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
