<?php
use controllers\MaterialControllers;
$app->get('/materials',function(){MaterialControllers::allMaterials();});
