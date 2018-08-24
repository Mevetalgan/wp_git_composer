<?php
/**
 * Basic WP Config
 */

require_once __DIR__ . '/../content/vendor/autoload.php';
(new \Dotenv\Dotenv( __DIR__ . '/../' ) )->load();

define( 'DB_NAME',     getenv( 'DB_NAME' ) );
define( 'DB_USER',     getenv( 'DB_USER' ) );
define( 'DB_PASSWORD', getenv( 'DB_PASSWORD' ) );
define( 'DB_HOST',     getenv( 'DB_HOST' ) );
define( 'DB_CHARSET',  getenv( 'DB_CHARSET' ) );
define( 'DB_COLLATE',  getenv( 'DB_COLLATE' ) ?? '' );

$table_prefix  = 'wp_';

# Rememeber to get your salts at http://api.wordpress.org/secret-key/1.1/salt/

define( 'AUTH_KEY',         getenv( 'AUTH_KEY' ) );
define( 'SECURE_AUTH_KEY',  getenv( 'SECURE_AUTH_KEY' ) );
define( 'LOGGED_IN_KEY',    getenv( 'LOGGED_IN_KEY' ) );
define( 'NONCE_KEY',        getenv( 'NONCE_KEY' ) );
define( 'AUTH_SALT',        getenv( 'AUTH_SALT' ) );
define( 'SECURE_AUTH_SALT', getenv( 'SECURE_AUTH_SALT' ) );
define( 'LOGGED_IN_SALT',   getenv( 'LOGGED_IN_SALT' ) );
define( 'NONCE_SALT',       getenv( 'NONCE_SALT' ) );

define( 'WPLANG', getenv( 'WPLANG' ) );

/**
 * Custom WordPress Install Path
 */

# Sets the site's admin location and the site's location, respectively
define( 'WP_SITEURL', getenv( 'WP_SITEURL' ) );
define( 'WP_HOME', getenv( 'WP_HOME' ) );

# Sets the content location, related to what's defined on composer.json file
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/../content' );
define( 'WP_CONTENT_URL', WP_HOME . '/../content');

# Sets the plugins location, related to what's defined on composer.json file
define( 'WP_PLUGIN_URL',  WP_CONTENT_URL . '/../plugins' );

# Disables the embebeded editor
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'RELOCATE', true );

# Disables automatic update functions
define( 'AUTOMATIC_UPDATER_DISABLED', false );
define( 'WP_AUTO_UPDATE_CORE', false );

/**
 * SSL
 * You might want to force SSL on the admin page
 */
define( 'FORCE_SSL_LOGIN', getenv( 'FORCE_SSL_LOGIN' ) ?? false );
define( 'FORCE_SSL_ADMIN', getenv( 'FORCE_SSL_ADMIN' ) ?? false );

/**
 * Debug Flags
 * Use them under development environments
 */

define('WP_DEBUG', getenv( 'WP_DEBUG' ) ?? false );
define('WP_DEBUG_LOG', getenv( 'WP_DEBUG_LOG' ) ?? false );
define('WP_DEBUG_DISPLAY', getenv( 'WP_DEBUG_DISPLAY' ) ?? false );
define('SAVEQUERIES', getenv( 'SAVEQUERIES' ) ?? false );

/* KEEP OUT BELOW */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );