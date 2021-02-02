<?php  
include_once "models/Model.php";

class Order extends Model {

	public function getDetailOrderById($id) {
		$stmt = $this->conn->prepare("SELECT * FROM order_detail WHERE order_id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getOrderById($id) {
		$stmt = $this->conn->prepare("SELECT * FROM orders WHERE id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

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