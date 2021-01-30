<?php  
include_once "config/database.php";

class Model {
	
	public $conn = '';

    function __construct() {
        $this->conn = $this->connect();
    }

    function connect() {
        try {
            $conn = new PDO(Database::DB, Database::DB_NAME, Database::DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection error". $e->getMessage());
        }
        return $conn;
    }
}

?>