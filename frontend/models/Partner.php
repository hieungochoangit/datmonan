<?php  
include_once "models/Model.php";

class Partner extends Model {

	public function getAllProduct($id) {
		$stmt = $this->conn->prepare("SELECT partners.*, products.* FROM partners INNER JOIN products WHERE partners.id=products.partner_id AND products.product_status=0 AND partner_id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}


?>