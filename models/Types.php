<?php
namespace models;
use lib\Core;
use PDO;


class Types extends Base {

		public function productType($product_id){
		$Types = array();
		foreach ($this->db->types()->where('id',$product_id) as $type) {
			$types[] = $type['type_name'];
		}
			return $types;

  }

}
