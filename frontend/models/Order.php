<?php  
include_once "models/Model.php";

class Order extends Model {

	public function getAllOrderByIdUser($id) {
		$stmt = $this->conn->prepare("SELECT * FROM orders WHERE order_user_id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>