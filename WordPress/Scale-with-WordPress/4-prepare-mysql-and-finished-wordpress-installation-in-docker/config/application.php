<?php
$host = $_SERVER['HTTP_HOST'];
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';

$full_root_path = '/var/www/wp';

if (getenv('WP_SSL')) {
    $_SERVER['HTTPS'] = 1;
    $protocol = 'https';
}

$url = "$protocol://$host";
define('WP_HOME', $url);
define('WP_SITEURL', "$url/wp");

define('WP_CONTENT_DIR', "$full_root_path/wp-content");
define('WP_CONTENT_URL', "$url/wp-content");

define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('DB_CHARSET', getenv('DB_CHARSET'));
define('DB_COLLATE', '');

$table_prefix = 'wp_';
