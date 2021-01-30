<?php  
include_once "models/Model.php";

class Category extends Model {

	public function getAllCategory() {
		$stmt = $this->conn->prepare("SELECT * FROM categories WHERE category_status=0");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function insert($name, $thumbnail, $status) {
		$stmt = $this->conn->prepare("INSERT INTO categories (category_name, category_thumbnail, category_status) VALUES (:name, :thumbnail, :status)");
		$arr = [
			':name' => $name,
			':thumbnail' => $thumbnail,
			':status' => $status
		];
		return $stmt->execute($arr);
	}
}

?>