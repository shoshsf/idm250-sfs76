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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'of&i]9]W*OW}Fwj`pgIb!X|+9Gv.wmUKll2eEq/<1/791^a8EJnq%A1,]soiPE{j' );
define( 'SECURE_AUTH_KEY',   ' l9%Y{sI5u?r3!f?oECHPu_v~`Z|z8?0`%I%[5IP%b1pP@to@r#=F%VMRS>WWq=i' );
define( 'LOGGED_IN_KEY',     'ur=P{.%Doyhz$UI.!sPrw2{o&r(1Z%|5.J7}+{q6ln9N>*#Z_N*6VS$e>u|lf^M*' );
define( 'NONCE_KEY',         'jG{|wrx6OL2[EYlWeCr=_[)q4YlmA-iS[<$!*~^ykZ[7c$XNts*B6V+xsDq|C,RF' );
define( 'AUTH_SALT',         'q=ot2<?`NPX39uo45pX&f@YzF]`atnqllW=kcEdTqwt~QauE~B8&CPRu)nz ;8,%' );
define( 'SECURE_AUTH_SALT',  '^mM,p<dfits}uZ!A_DF~+oT-F?=Rw~w!W1b->M^q1tD$?FU[q.W6Q]yIcUZoi$p8' );
define( 'LOGGED_IN_SALT',    '()q|kMNo{QO/!_o?9{3TpGAk!znR_444t(})DbT$!Z%RK3?NN`Syv@q.eF6z+[2:' );
define( 'NONCE_SALT',        'A{d0Z*PB`Ww_yS+.WQ*pF+M%<;j hw<5=4DVNX+V{[{wUOA&]2BUy_*6A7/xQr<j' );
define( 'WP_CACHE_KEY_SALT', '[P*$A*/kHH0iPX%&PwjvcV!t-Y!ZuxPgl`1h=8%IFg.D4sC}~[b*1CFI-^28[Rq9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define('WP_HOME','https://idm250.local');
define('WP_SITEURL', 'https://idm250.local');

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
