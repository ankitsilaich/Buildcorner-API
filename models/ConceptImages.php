<?php
namespace models;
use lib\Core;
use PDO;


class ConceptImages extends Base {

		public function productConcepts($product_id){
		$concepts = array();
		foreach ($this->db->concept_images()->where('products_id',$product_id) as $concept) {
			$concepts[] = $concept['concept_name'];
		}
			return $concepts;

  }

}
