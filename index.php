<?php
require_once __DIR__ . '/vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath('/finanzas-v2');

require_once __DIR__ . '/routes/router.php'; // Carga las rutas

$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header("HTTP/1.0 404 Not Found");
    require __DIR__ . '/views/404.php';
}
