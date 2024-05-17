<?php

require __DIR__ . '/vendor/autoload.php';

$router = new San\Framework\Router;

$router->add('GET', '/',  function () {
    return 'Estamos na homepage';
});
$router->add('GET', '/projects/(\d+)',  function ($params) {
    return 'Estamos Listando o projeto de id: ' . $params[1];
});


try {
    echo $router->run();
} catch (\San\Framework\Exceptions\HttpException $e) {
    echo $e->getMessage();
}
