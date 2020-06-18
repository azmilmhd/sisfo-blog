<?php 

namespace app;
use PDO;
class Controller{

	protected $db;

	public function __construct() {
		try {
		
			$this->db = new PDO("mysql:host=localhost;dbname=db_uts6", "root", "");
		} catch (Exception $e) {
			die("error! " . $e->getMessage());
	
		}

  	}

}