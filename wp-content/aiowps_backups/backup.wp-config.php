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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'basketk7_408' );

/** MySQL database username */
define( 'DB_USER', 'basketk7_408' );

/** MySQL database password */
define( 'DB_PASSWORD', 'M0c10_3088' );

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
define('AUTH_KEY',         'U1K8a,&t2G`~+(;yu^T+APp9-hc!B-lhO?i||28W0w;;$J:7I>k4>A)^gxZW|]LM');
define('SECURE_AUTH_KEY',  'ZCA`#c5?4[ XL|mjr8GV8qNus 8F,M)_6x!cRK&sQsP7oh+5{+p7P8C=*-{_FkXw');
define('LOGGED_IN_KEY',    '{}JI-D^HEPH7o`R#mHHMb(8IS:O.NZdW7u=l;mq8d&o72M4iGEh(b]G&f]-(nb4L');
define('NONCE_KEY',        '2CmK/+/e>Tm enJTPr>$In)jlJtmRypEc A|xiym_LI}d1wFhk7R5=Z6DyeQRG~.');
define('AUTH_SALT',        'v&uv[.CVfU6Rx0c@JsTn|rMhV!kWr`YvU%snb$Hz-;x3;l3lC6K{ &k~e#>>WH;v');
define('SECURE_AUTH_SALT', 'L[.W^.bZd%8?WIak];#+LL|i#N!fnEK%G1mHN-WIxpD.m0|KKW=S*dSU|l&8487N');
define('LOGGED_IN_SALT',   '.|MB0|-QWxHF|w:l~7=)aaoKyJ|}YQDiR++-UCEL|b&h??*ubU0%sY*v>YzY5-o;');
define('NONCE_SALT',       '8?<T8:+TW+<`cQ*N>yl<8V!?F] y*Kbhq -}PAbT|h|b3Hiaj!H-Ug`ag9!Lu7K8');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '408_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
