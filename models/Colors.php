<?php

/**
 * This is an example of User Class using PDO
 *
 */

namespace models;
use lib\Core;
use PDO;


class Colors extends Base {

	public function getColors(){
		$colors = array();
		foreach ($this->db->colors() as $color) {
			$colors[] = $color['color_name'];
		}
			return $colors;
	}

}
