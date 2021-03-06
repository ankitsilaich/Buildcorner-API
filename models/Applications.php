<?php

/**
 * This is an example of User Class using PDO
 *
 */

namespace models;
use lib\Core;
use PDO;



class Applications extends Base {

	public function getApplication(){

		$applications = array();
		foreach ($this->db->applications() as $application) {
			$applications[] = $application['application_name'];
		}
			return $applications;
	}

}
