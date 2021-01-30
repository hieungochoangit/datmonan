<?php  
include_once "models/Model.php";

class Category extends Model {

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