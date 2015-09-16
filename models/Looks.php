<?php
namespace models;
use lib\Core;
use PDO;



class Looks extends Base {

	public function getLook(){

		$looks = array();
		foreach ($this->db->looks() as $look) {
			$looks[] = $look['look_name'];
		}
			return $looks;
	}

}
