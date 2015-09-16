<?php
namespace models;
use lib\Core;
use PDO;



class Finishes extends Base {

	public function getFinish(){

		$finishes = array();
		foreach ($this->db->finishes() as $finish) {
			$finishes[] = $finish['finish_name'];
		}
			return $finishes;
	}

}
