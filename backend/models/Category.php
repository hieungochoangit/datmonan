<?php  
include_once "models/Model.php";

class Category extends Model {

	function updateCategory($name, $thumbnail, $status, $id) {
		$stmt = $this->conn->prepare("UPDATE categories SET category_name=:name, category_thumbnail=:thumbnail, category_status=:status WHERE id=:id");
		$arr = [
			':name' => $name,
			':thumbnail' => $thumbnail,
			':status' => $status,
			':id' => $id
		];
		return $stmt->execute($arr);
	}

	public function getCategoryById($id) {
		$stmt = $this->conn->prepare("SELECT * FROM categories WHERE id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function getAllCategoryActive() {
		$stmt = $this->conn->prepare("SELECT * FROM categories WHERE category_status=0");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getAllCategory() {
		$stmt = $this->conn->prepare("SELECT * FROM categories");
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