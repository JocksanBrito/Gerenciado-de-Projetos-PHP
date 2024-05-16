<?php

require __DIR__ . '/vendor/autoload.php';

$router = new San\Framework\Router;

$router->add('/',  function () {
    return 'Estamos na homepage';
});
$router->add('/projects',  function () {
    return 'Estamos Listando Projetos';
});

echo $router->run();
