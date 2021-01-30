<?php  
include_once "models/Model.php";

class Category extends Model {

	public function getAllCategory() {
		$stmt = $this->conn->prepare("SELECT * FROM categories WHERE category_status=0");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>