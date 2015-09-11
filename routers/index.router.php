<?php

// GET index route
$app->get('/', function () use ($app) {
    $info = array();
    $info['website'] = "Buildcorner.com";
    $info['version'] = "1.0";
    echo json_encode($info);
});
