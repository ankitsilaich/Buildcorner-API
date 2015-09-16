<?php
use controllers\ApplicationControllers;
$app->get('/applications',function(){ApplicationControllers::allApplications();});
