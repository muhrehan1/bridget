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
define( 'DB_NAME', 'bridget' );

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
define( 'AUTH_KEY',         '4321D@02G$N~F99-)nZxqKj0T.0M3BK/D0#X84Qco?ZwXd>:PGmBeVvWRG`CK)Jc' );
define( 'SECURE_AUTH_KEY',  'CEwHF<6Nn4GIyyGqcV B!#$uK]KVcVG; 1jxo&o^G}>6nAnUMl&Ip+vHqA0gA0M^' );
define( 'LOGGED_IN_KEY',    'mO[(.mnShHv|QPK/fLzM1*e2|3+$EWI5G12B2w:&aJzr$4+w@FkFn(aJ;fE>k[<L' );
define( 'NONCE_KEY',        'dl#8@OsgG$i<8DJ_%V^Sn8.J)~pl,(wSuqM2[y|4WJ3<kyS?p1j=w8P#jDu&:-[t' );
define( 'AUTH_SALT',        '}e7_owHuZ|sCIYy4+l^jNl&%[!M PkuwutJVn9}](CyH3T,Lb8$q97hFVh17P#NE' );
define( 'SECURE_AUTH_SALT', 'P1ds-Oj. ^}[gVjzDE)fv1h^xc,B yI#jgEn-1R7=Q_F3@mfq!(;=zyl0BZWz3A.' );
define( 'LOGGED_IN_SALT',   'AMN&8`G((t5NlKomrN7q={EQ!p`4b 8l*t/T(PLR9PXmLr8UB[S]a{UC%J!3 ~Lb' );
define( 'NONCE_SALT',       'uoA:XEd=k^wLDN@{H~_^@_aLrlQmE&jY`Hs(q-s3h,* /S^hM,[^P7)Q2jB0YM]x' );

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
