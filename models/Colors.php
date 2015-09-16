<?php
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
	public function productColors($product_id){
		$colors = array();
		foreach ($this->db->product_colors()->where('products_id',$product_id) as $color) {
			$colors[] = $color['color_name'];
		}
			return $colors;

  }

}
