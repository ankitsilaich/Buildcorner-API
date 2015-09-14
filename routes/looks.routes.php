<?php
use controllers\LookControllers;
$app->get('/looks',function(){LookControllers::allLooks();});
