<?php  
include_once "models/Model.php";

class Store extends Model {

	public function getAllStore() {
		$stmt = $this->conn->prepare("SELECT * FROM partners WHERE partner_status=0");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>