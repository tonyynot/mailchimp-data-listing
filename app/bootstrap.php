<?php

use Slim\Slim as App;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

session_cache_limiter(false);
session_start();

define('BASE_DIR', dirname(__DIR__));

require_once BASE_DIR . '/vendor/autoload.php';

$app = new App([
    'view' => new Twig(),
    'templates.path' => BASE_DIR . '/resources/views',
    'debug' => true
]);

require_once BASE_DIR . '/app/routes.php';

$view = $app->view();

$view->parserOptions = [
    'debug' => true
];

$view->parserExtensions = [
    new TwigExtension
];
