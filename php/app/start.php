<?php

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

use Noodlehaus\Config;

use isit\user\user;
use isit\helpers\hash;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new Slim([
  'mode' => rtrim(file_get_contents(INC_ROOT . '/mode.php')),
  'view' => new Twig(),
  'templates.path' => INC_ROOT . '/app/views'
]);

$app->configureMode($app->config('mode'), function() use ($app) {
  $app->config = Config::load(INC_ROOT . "/app/config/{$app->mode}.php");
});

require 'database.php';
require 'routes.php';

$app->container->set('user', function () {
    return new user;
});

$app->container->singleton('hash', function () use ($app) {
  return new hash($app->config);
});

$view = $app->view();

$view->parserOptions = [
  'debug' => $app->config->get('twig.debug')
];

$view->parserExtensions = [
  new TwigExtension
];

echo $app->hash->password('ilovecats');

$password = 'ilovecats';
$hash = '$2y$10$qYeAA5HwMYmubOZITGSR5uAtRGsXK3dwlLJkEaE2LlVVmEvUvEz9a';

var_dump($app->hash->passwordCheck($password, $hash));
