<?php

switch ($hostname) {
    case 'localhost':
        define('WP_ENV', 'development');
        break;

    case 'staging.domain.com':
        define('WP_ENV', 'staging');
        break;

    case 'www.domain.com':
    default:
        define('WP_ENV', 'production');
}

