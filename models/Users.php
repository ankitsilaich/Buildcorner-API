<?php
namespace models;
use lib\Core;
use PDO;


class Users extends Base {

	public function getUser(){
    $users = array();
    foreach ($this->db->users() as $user) {
      $users[] = array(
          'name' => $user['name'],
          'email' => $user['email'],
          'password' => $user['password'],
          'join_date' => $user['join_date']
              );
    }
      return $users;
  }

}
