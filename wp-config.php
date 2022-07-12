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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gostudent' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '#/M+7}1$W?rYpkgvkKXB76bGX:3II1KZ^j;wzav5!G6%#Z4=xT+H4,b*camG:t3~' );
define( 'SECURE_AUTH_KEY',  '&BU8Bnsk(a0;:,gMdd+]}bGr#-(e;a!{}i#k,v(rbeZO!9Z]*!JqXzP/s2BR[u$A' );
define( 'LOGGED_IN_KEY',    '1{c]QxS=M744]G?y|zB@WH+&cw_pAA/hM%@9TV<PA;VYW3Xz%V$?JHVa~U-yrl =' );
define( 'NONCE_KEY',        'J86!E+w=Y@G+<1Vc~TZ,nBF37VtVl<].@+4I~{lhow4=mAYm=]Vg9#IrDaQ8%b!{' );
define( 'AUTH_SALT',        'yXDqbkb~L3djiJ$w``cC@y>|fwX.6([iCGmkt+(% >C<&3g[o/Mx2yJ$V9LgT~{}' );
define( 'SECURE_AUTH_SALT', '/`:!MDPP`nY)H))LPteUU([%=m(jRr|}$`.,_a%!$AluL#k2G3GS^tM1SdR2U-/W' );
define( 'LOGGED_IN_SALT',   '0(SJ];Uy{$XuZ?emsj#|8m,Y?;ZUS/(b%]FS$hYji^ YS_9,yd2Uuw1.|R0<`wpx' );
define( 'NONCE_SALT',       'aTvj,^KOE2)#6f~P4FX ;&b_e5_JWInDyXn.$Jki:>Hro{{`5;{8a^ S;DMY.HGF' );

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
