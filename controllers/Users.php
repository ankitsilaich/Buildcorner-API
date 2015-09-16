<?php
namespace controllers;
use models\Users;
class UsersControllers extends Base
{
  public static function allUsers()
    {
        $users = new Users();
        $data = $users->getUser();
        echo json_encode($data);
    }
}
