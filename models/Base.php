<?php

/**
 * This is a base model using notorm
 *
 */

namespace models;
use lib\Core;
use PDO;

//Base model class for models
class Base {

	protected $db;
  protected $core;


  public function __construct()
   {
		$this->core = Core::getInstance(); //getting instance from core
    $this->db = $this->core->connection; //setting models $db to connection with database and use NOTORM
   }

}
