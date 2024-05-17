<?php

require __DIR__ . '/vendor/autoload.php';

$router = new San\Framework\Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/routes.php';

try {
    echo $router->run();
} catch (\San\Framework\Exceptions\HttpException $e) {
    echo $e->getMessage();
}
