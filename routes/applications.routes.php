<?php
use controllers\ApplicationControllers;
$app->get('/applications',function(){AppControllers::allApplications();});
