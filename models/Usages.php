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
	public function productUsages($product_id){

		$usages = array();
		foreach ($this->db->product_usages()->where('products_id',$product_id) as $usage) {
			$usages[] = $usage['usage_name'];
		}
			return $usages;
	}


}
