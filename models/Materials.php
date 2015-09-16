<?php
namespace models;
use lib\Core;
use PDO;



class Materials extends Base {

	public function getMaterial(){

		$materials = array();
		foreach ($this->db->materials() as $material) {
			$materials[] = $material['material_name'];
		}
			return $materials;
	}

}
