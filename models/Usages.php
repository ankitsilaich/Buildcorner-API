<?php
namespace models;
use lib\Core;
use PDO;



class Usages extends Base {

	public function getUsage(){

		$usages = array();
		foreach ($this->db->usages() as $usage) {
			$usages[] = $usage['usage_name'];
		}
			return $usages;
	}

}
