<?php

abstract class ConnectionSQLite {

	protected $db_name = 'sqlite/hospital.sqlite';
	public $conn;
	public $query;

	public function __construct(){

	try {

		$this->conn = new PDO('sqlite:sqlite/hospital.sqlite');

	} catch(PDOException $e){
            $this->error = $e->getMessage();
        }
      }

	}

?>