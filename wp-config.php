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
define( 'DB_NAME', 'Chiwanka' );

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
define( 'AUTH_KEY',         'UAc8*lJA=|l$O2iV<B<n4KU_;i C^9`|+`hli{r3a!MSD7K@,%fwMvN^BX._q99!' );
define( 'SECURE_AUTH_KEY',  'oe6z}Qgw]b3?`SP;)0f$Y=7P/w!*Wll~,$S1GIiS_2/_f>&j;ZI)bR7/uG]RQ:ku' );
define( 'LOGGED_IN_KEY',    'N!EB6V@|9jZ86yfFY@IsaII^.)!?;k4}lc_n7eLV2r`93oP6fr}^RV(/DDto)+Lo' );
define( 'NONCE_KEY',        'AAI2<xZDn(I+tc]5q;<LuSX.7F+!fWdoFJg7TK_f`$C$h;SDUcG(lwX6~UB`4%C7' );
define( 'AUTH_SALT',        'mvir=DG!8$DZG)u$vYb$KgJG3d|@Az*ZH{!`JqbDTE$}u*l-WwE~jJ+BA;t[9yrI' );
define( 'SECURE_AUTH_SALT', '_g-rV9=sa(oL5|=70DM2{:~UxpV]qi|lhySK}ukGcnDLKs!LeeT,`Kn|T&Gllfu*' );
define( 'LOGGED_IN_SALT',   'C._df}eHIoi8tg4#&PDQb$AY-4GEj$Ag!@n6LKp3{$BBh=0uX;B4%-;B3}rL$mrm' );
define( 'NONCE_SALT',       'xUKo`4JAGDQ6B&VYr;)}PFE4g[.,> ~`/Yj~`SH-.gOaas`JI3qwBe@2!DNA%r]0' );

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
