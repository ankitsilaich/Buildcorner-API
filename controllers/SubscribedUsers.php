<?php
namespace controllers;
use models\SubscribedUsers;
class SubscribedUsersControllers extends Base
{
  public static function allUsers()
    {
        $subscribedUsers = new SubscribedUsers();
        $data = $subscribedUsers->getUser();
        echo json_encode($data);
    }
}
