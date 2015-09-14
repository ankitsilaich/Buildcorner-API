<?php
use controllers\ShapeControllers;
$app->get('/shapes',function(){ShapeControllers::allShapes();});
