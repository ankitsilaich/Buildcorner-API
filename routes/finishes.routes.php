<?php
use controllers\FinishControllers;
$app->get('/finish_types',function(){FinishControllers::allFinishes();});
