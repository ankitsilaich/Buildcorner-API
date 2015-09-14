<?php
use controllers\UsageControllers;
$app->get('/usages',function(){UsageControllers::allUsages();});
