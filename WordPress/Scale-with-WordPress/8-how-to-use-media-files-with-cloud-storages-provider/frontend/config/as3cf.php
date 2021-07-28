<?php
define('AS3CF_SETTINGS', serialize(array(
    'provider' => getenv('AS3CF_PROVIDER'),
    'access-key-id' => getenv('AS3CF_ACCESS_KEY_ID'),
    'secret-access-key' => getenv('AS3CF_SECRET_ACCESS_KEY'),
)));
