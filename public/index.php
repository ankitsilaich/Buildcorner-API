<?php

require '../vendor/autoload.php';
require '../config.php';





$app = new \Slim\Slim(array(
    'debug' => true,
));
$controllers = glob('../controllers/*.php');
foreach ($controllers as $controller) {
    require $controller;
}
// Automatically load router files
$routers = glob('../routes/*.routes.php');
foreach ($routers as $router) {
    require $router;
}


$app->run();
