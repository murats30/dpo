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
define( 'DB_NAME', 'dpo' );

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
define( 'AUTH_KEY',         'uVU%WOZ%i;lfis9:ztu}lhvtjn5`@Z $45c:@@U<5&8$GlP~WGB-.1j2M4O=`$$=' );
define( 'SECURE_AUTH_KEY',  '>pKM{Iuy%}GU9@Jx?+d1>KtRv< *h`X/%HB#n?qP+j.A#l=%.$$h4]T=XFe5@Rp_' );
define( 'LOGGED_IN_KEY',    'BYlqj[OIy7} KDw#b[/AP[MObK7*E[/V[!=7,J@[(Ph]?>4NY,GO<eLySG|<>sI4' );
define( 'NONCE_KEY',        'C%7~pl-K?L%49z1/%rf=-nO-E,??K(XO-Sp62t&htZ9wq}O1b6KjMMp5Hs=Ht>@a' );
define( 'AUTH_SALT',        '|K2iA$:FKYx]IAv7RAjYwvVDBra+Mk}j%#KPINqn;+H1rP1:]/%FvrK5PD<qJf00' );
define( 'SECURE_AUTH_SALT', 'GF,P2F+!n TLf<c~(EW6{_VX_p7xT^jgH(4.zqTRmfH+[q2Rb~jH,!~RW|z:}ND7' );
define( 'LOGGED_IN_SALT',   ' XOEwijRXJ_<}ysw`fl>((0]mK;46HQ+YCgi,h#Aki*L;9x7->!wAZo.nP:=URW*' );
define( 'NONCE_SALT',       '.K8i[F!-T^QM+s);^MeMgW.}&IveZ[(k?_1ZrI6/3jb;Re?7e!@;qKX5v] 9F%[j' );

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
