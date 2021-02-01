<?php  
include_once "models/Model.php";

class Product extends Model {

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