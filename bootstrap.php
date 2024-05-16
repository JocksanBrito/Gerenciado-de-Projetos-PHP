<?php

require __DIR__ . '/vendor/autoload.php';

$router = new San\Framework\Router;

$router->add('/',  function () {
    return 'Estamos na homepage';
});
$router->add('/projects/(\d+)',  function ($params) {
    return 'Estamos Listando o projeto de id: ' . $params[1];
});

echo $router->run();
