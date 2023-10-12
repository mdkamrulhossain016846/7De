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
define( 'DB_NAME', '7de_db' );

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
define( 'AUTH_KEY',         '[wkinr{*DiJ@..bJp(slWQNBcqOn~wV _~/`20{8yv?]Zr!<,8a3(5HN|kmZ,i)}' );
define( 'SECURE_AUTH_KEY',  '38um8pQP91@pIv-R(S972;DkZU|v^23V?ZV(Ah+qc@=RhF#^@`;`vQ=*P4J_ttvf' );
define( 'LOGGED_IN_KEY',    ' :gqWh>>G>UJv7Qt^kZYH7?Q_Bo((}/=YaFkT-hFZp<~ML5TPDKuoVr>:~),x(8i' );
define( 'NONCE_KEY',        '9XXfSIU8B{pj2nSbn$[Wj=Kar{`Q-k/sWa;Dc#5Eif6GlZ%(FL;;~5]9II_4M*=[' );
define( 'AUTH_SALT',        'T9XWglvA|W(&iE*Bm(n}Dv&A>-A~p>Z1^AKB`x5_YDo,oJy1Ms!H8lI_u-=~f+=*' );
define( 'SECURE_AUTH_SALT', 'j$=1WfMo}o[oPH_@l%bi[v6K!<Y3J%zSI3 wIcj.38i,|<V&&%^W&iOaG:=W(_`r' );
define( 'LOGGED_IN_SALT',   'bH?GQ_kv#gx3,8d339Q?UE}yV9G3h%KH. Hp-H36C=sm)Wh-?<x.K*/:4r[ZVd#S' );
define( 'NONCE_SALT',       'pJ}(m1R13xeE&N _RS=TDm{}LfiL*?)Na/CScrlr.;YGW(EOdejZoT7Us3X)S2,{' );

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
