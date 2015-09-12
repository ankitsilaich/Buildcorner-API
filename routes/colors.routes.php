<?php
use controllers\ColorsControllers;

$app->get('/colors',function(){ColorsControllers::allColors();});
