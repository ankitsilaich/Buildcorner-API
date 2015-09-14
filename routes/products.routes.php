<?php
use controllers\ProductControllers;
$app->get('/product(/:id)',function($id=null){ProductControllers::allProducts($id);});
