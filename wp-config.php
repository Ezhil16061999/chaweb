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
define( 'DB_NAME', 'chademo' );

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
define( 'AUTH_KEY',         ',~nrp1H{o<E;Y[*H%O8<sIK0q.!>ZD1WJ&np~Q+a27dX@yo=*Z)]J ^+k0e9Iuh8' );
define( 'SECURE_AUTH_KEY',  'jv)04mKCO}*_sMj~gro 2vV-cE6Ua qjT$|h+8{NgH+y/,*Ke}8>8!!gStu[ggDf' );
define( 'LOGGED_IN_KEY',    '{[l8BqqGKIn4hJE8@&9pOIe&tsaA:P+ ;N$ D8H-z[,&86*u}Qm;=^(9!,0<}-{2' );
define( 'NONCE_KEY',        '2 +jZoc9i^<Hpv{r`|M-wx3fFVY6__|x-{Wmas9.xXq+$Zsgy,i-Mg.|odkV;^{_' );
define( 'AUTH_SALT',        'NMN[XpZL1>-:j7kI_?jR|y=&xJ/=?fKo`k;#$j6jiBLey,Fj!7Xf>^wGFjOZ/IPH' );
define( 'SECURE_AUTH_SALT', '10EAru-STsWz^^P+d4gv?*6YXzOC~+vrDT=p[89Ga.E>&_YN8A1w4.Z}lur| wAC' );
define( 'LOGGED_IN_SALT',   '3K7C_RA~(b*<O:`63#K]8bD`RXPupx<Nw*c-^=F,7:Z25eAn~}&oP@gd*8g$fPk;' );
define( 'NONCE_SALT',       '%#~Z-W&o9%UbgDq:4+Ss4b!7D4xs#Hu8EV!$VD,Z^[%^7my.D.f1KE*0jhDl`Wh8' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
