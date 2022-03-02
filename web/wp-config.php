<?php
/**
 * Do not edit this file. Edit the config files found in the config/ dir instead.
 * This file is required in the root directory so WordPress can find it.
 * WP is hardcoded to look in its own directory or one directory up for wp-config.php.
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/config/application.php';
require_once ABSPATH . 'wp-settings.php';
$envs = [
    'development' => 'http://wp-bedrock-docksal-sage.docksal',
    'staging'     => 'http://staging.wp-bedrock-docksal-sage.com',
    'production'  => 'http://wp-bedrock-docksal-sage.com'
];
define('ENVIRONMENTS', serialize($envs));
