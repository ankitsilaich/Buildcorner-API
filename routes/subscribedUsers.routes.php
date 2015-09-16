<?php
use controllers\SubscribedUsersControllers;
$app->get('/subscribedUsers',function(){SubscribedUsersControllers::allUsers();});
