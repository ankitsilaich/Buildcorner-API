<?php
namespace models;
use lib\Core;
use PDO;



class SubscribedUsers extends Base {

	public function getUser(){

		$users = array();
		foreach ($this->db->subscribed_user() as $user) {
			$users[] = array(
              "email"=> $user["email"],
              "date" =>  $user["date"]
              );
		}
			return $users;
	}

}
