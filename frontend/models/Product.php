<?php  
include_once "models/Model.php";

class Product extends Model {

	public function getProductById($id) {
		$stmt = $this->conn->prepare("SELECT * FROM products WHERE id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function getDetailPartner($id) {
		$stmt = $this->conn->prepare("SELECT * FROM partners WHERE id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function getProduct($category_id) {
		$stmt = $this->conn->prepare("SELECT * FROM products WHERE category_id=:category_id ORDER BY id DESC");
		$arr = [
			':category_id' => $category_id
		];
		$stmt->execute($arr);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getDetailProductByIdCategory($id) {
		$stmt = $this->conn->prepare("SELECT partners.*, categories.*, products.* FROM partners INNER JOIN categories, products WHERE partners.id=products.partner_id AND partners.partner_status=0 AND categories.id=products.category_id AND products.id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function getAllProductByIdCategory($id) {
		$stmt = $this->conn->prepare("SELECT partners.*, categories.*, products.* FROM partners INNER JOIN categories, products WHERE partners.id=products.partner_id AND partners.partner_status=0 AND categories.id=products.category_id AND categories.id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>