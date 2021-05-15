<?php
$domain = 'testdomain.test';

define('WP_SITEURL', "{$domain}/wp");
define('WP_HOME', "{$domain}");

$httpHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $domain;

define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $httpHost . '/wp-content');

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/wp');
}

require_once(ABSPATH . 'wp-settings.php');
