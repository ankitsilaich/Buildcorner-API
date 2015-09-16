<?php
use controllers\UsersControllers;
$app->get('/users',function(){UsersControllers::allUsers();});
