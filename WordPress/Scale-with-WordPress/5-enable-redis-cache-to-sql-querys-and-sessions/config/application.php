<?php
$host = $_SERVER['HTTP_HOST'];
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';

$full_root_path = '/var/www';

if (getenv('WP_SSL')) {
    $_SERVER['HTTPS'] = 1;
    $protocol = 'https';
}

$url = "$protocol://$host";
define('WP_HOME', $url);
define('WP_SITEURL', "$url/wp");

define('WP_CONTENT_DIR', "$full_root_path/wp-content");
define('WP_CONTENT_URL', "$url/wp-content");

# MySQL config
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('DB_CHARSET', getenv('DB_CHARSET'));
define('DB_COLLATE', '');

$table_prefix = 'wp_';

# Redis config
define('WP_REDIS_HOST', getenv('WP_REDIS_HOST'));
define('WP_REDIS_PORT', getenv('WP_REDIS_PORT'));
define('WP_REDIS_MAXTTL', getenv('WP_REDIS_MAXTTL'));
define('WP_REDIS_PREFIX', md5($host));
define('WP_REDIS_KEY_SALT', getenv('WP_REDIS_KEY_SALT'));
