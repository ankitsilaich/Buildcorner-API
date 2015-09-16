<?php
namespace models;
use lib\Core;
use PDO;



class Shapes extends Base {

	public function getShape(){

		$shapes = array();
		foreach ($this->db->shapes() as $shape) {
			$shapes[] = $shape['shape_name'];
		}
			return $shapes;
	}

}
