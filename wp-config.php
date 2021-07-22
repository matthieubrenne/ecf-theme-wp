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

@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_custom_theme' );

/** MySQL database username */
define( 'DB_USER', 'wp_custom_theme' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`*B8as?<QOwJoSgy)<FWR%lO[-2kZF:r@8LuW/Uf!Z4n0A|aR@7!)9xP<^DY?w}S' );
define( 'SECURE_AUTH_KEY',   'rX@BV5j.VP.=#j<tR|5(%%wV^_#[XeS==<_PwwFr:||jsMym,#kX7|W1`ZeSXP},' );
define( 'LOGGED_IN_KEY',     'Qou;DXIE@7+3N,b;OGp1[5EfgJlrmAodpGoYh_ezPJS#iJ{DZ$6{zY1ooY9OVXgv' );
define( 'NONCE_KEY',         'aE[} q}+,OC}YJ7eX$v&41Q06Acu6q$Sl4cMg8w(TgR#tmJ9P3f[(@qFu=mZ0jcq' );
define( 'AUTH_SALT',         '+M)anF/:z*t#-RToMI3Uf)hj;1G$BW%Hh${23HxgM[9kr=yS=vT7-cRvoizx5:h-' );
define( 'SECURE_AUTH_SALT',  'aZe#-c-K< :{tIPkT?iH_`W:r;gY=}%<nj;Bm/eD`uOnZq%Gl;Z=n*U6/d5YL*yH' );
define( 'LOGGED_IN_SALT',    'Ng<09/5iH<B, e/c$YzPBr!x&JdI4~^1`$ffW}nFNB+En[ZV[1OtsrBzYZ`.Ilo@' );
define( 'NONCE_SALT',        'jnrNMSQ*SCS$aIPL1 u0TQ9C!Us{jNB{oF~tsx-G~SN2g1*RT#@u@Z0HNDow0(UG' );
define( 'WP_CACHE_KEY_SALT', 'v+hL~EaW:/>+PmN7wc/1V1f36$|#c[xmzo^NOG}>5+<SKWg5P.GCTtnx9u8Aa<?N' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
