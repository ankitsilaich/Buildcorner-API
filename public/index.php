<?php

require '../vendor/autoload.php';
require '../config.php';





$app = new \Slim\Slim(array(
    'debug' => true,
));
// $models = glob('../models/*.php');
// foreach ($models as $model) {
//     require $model;
// }
// Automatically load router files
$routers = glob('../routers/*.router.php');
foreach ($routers as $router) {
    require $router;
}

$app->run();
