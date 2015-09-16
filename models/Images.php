<?php
namespace models;
use lib\Core;
use PDO;


class Images extends Base {

		public function productImages($product_id){
		$images = array();
		foreach ($this->db->product_images()->where('products_id',$product_id) as $image) {
			$images[] = $image['image_name'];
		}
			return $images;

  }

}
