<?php

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();

$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => getenv('APP_DEBUG') === 'true',
        'app'                 => [
            'name' => getenv('APP_NAME'),
        ],
    ],
]);

$container = $app->getContainer();

require_once __DIR__.'/../routes/web.php';
