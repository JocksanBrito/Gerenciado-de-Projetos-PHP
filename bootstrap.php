<?php

require __DIR__ . '/vendor/autoload.php';

$router = new San\Framework\Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/routes.php';

try {
    $result = $router->run();
    $response = new \San\Framework\Response;
    $response($result['action'], $result['params']);
} catch (\San\Framework\Exceptions\HttpException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
