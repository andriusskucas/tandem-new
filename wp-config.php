<?php
// Absolute path to the WordPress directoryyyy



// Try environment variable 'WP_ENV'
if (getenv('WP_ENV') !== false) {
    // Filter non-alphabetical characters for security
    define('WP_ENV', preg_replace('/[^a-z]/', '', getenv('WP_ENV')));
}

// Define site host
if (isset($_SERVER['HTTP_X_FORWARDED_HOST']) && !empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $hostname = $_SERVER['HTTP_X_FORWARDED_HOST'];
} else {
    $hostname = $_SERVER['HTTP_HOST'];
}

// If WordPress has been bootstrapped via WP-CLI detect environment from --env=<environment> argument
if (PHP_SAPI == "cli" && defined('WP_CLI_ROOT')) {
    foreach ($argv as $arg) {
        if (preg_match('/--env=(.+)/', $arg, $m)) {
            define('WP_ENV', $m[1]);
        }
    }
	$hostname = "localhost";
}

// Filter
$hostname = filter_var($hostname, FILTER_SANITIZE_STRING);

if ( file_exists( dirname(ABSPATH).'/env.php' ) ) {
    include dirname(ABSPATH).'/env.php';
}
// Try server hostname
if (!defined('WP_ENV')) {
    // Set environment based on hostname
    include dirname(ABSPATH).'/wp-config.env.php';
}
// Are we in SSL mode?
if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
    (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')) {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}
// Load default config
include dirname(ABSPATH).'/wp-config.default.php';
// Load config file for current environment
include dirname(ABSPATH).'/wp-config.' . WP_ENV . '.php';

if ( file_exists( dirname(ABSPATH).'/secrets' ) ) {
	/** The config file resides in ABSPATH */
	require_once( dirname(ABSPATH).'/secrets/salts.php' );
	require_once( dirname(ABSPATH).'/secrets/db.php' );

}elseif(file_exists( dirname(dirname(ABSPATH)).'/secrets' )){
    /** The config file resides in ABSPATH */
	require_once( dirname(dirname(ABSPATH)).'/secrets/salts.php' );
	require_once( dirname(dirname(ABSPATH)).'/secrets/db.php' );
}else{
    die('There are no secret files!');
}

// Define WordPress Site URLs if not already set in config files
if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', $protocol . rtrim($hostname, '/'));
}
if (!defined('WP_HOME')) {
    define('WP_HOME', $protocol . rtrim($hostname, '/'));
}
// Define W3 Total Cache hostname
if (defined('WP_CACHE')) {
    define('COOKIE_DOMAIN', $hostname);
}
// Clean up
unset($hostname, $protocol);
/** End of WordPress Multi-Environment Config **/
/* That's all, stop editing! Happy blogging. */
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
