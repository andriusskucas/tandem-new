<?php
define('WP_SITEURL', 'http://localhost/new-tandem/wp');
define('WP_HOME',    'http://localhost/new-tandem');

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/new-tandem/wp-content');
define('WP_CONTENT_URL', 'http://localhost/new-tandem/wp-content');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jhgf54_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('DISALLOW_FILE_MODS',true);
