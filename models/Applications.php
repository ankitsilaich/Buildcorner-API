<?php
namespace models;
use lib\Core;
use PDO;



class Applications extends Base {


	public function productApplications($product_id){

		$applications = array();
		foreach ($this->db->product_applications()->where('products_id',$product_id) as $application) {
			$applications[] = $application['application_name'];
		}
			return $applications;
	}


}
