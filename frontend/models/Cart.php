<?php  
include_once "models/Model.php";

class Cart extends Model {

	public function addOrderDetail($product_id, $product_name, $product_thumbnail, $quantity, $price, $order_id) {
		$stmt = $this->conn->prepare("INSERT INTO order_detail (o_product_id, o_product_name, o_product_thumbnail, o_product_quantity, o_product_price, order_id) VALUES (:p_id, :p_name, :p_thumbnail, :p_quantity, :p_price, :order_id)");
		$arr = [
			':p_id' => $product_id,
			':p_name' => $product_name,
			':p_thumbnail' => $product_thumbnail,
			':p_quantity' => $quantity,
			':p_price' => $price,
			':order_id' => $order_id
		];
		return $stmt->execute($arr);
	}

	public function getIdOrderByIdUser($id) {
		$stmt = $this->conn->prepare("SELECT id FROM orders WHERE order_user_id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function addOrder($code, $name, $address, $phone, $price, $quantity, $user_id, $note) {
		$stmt = $this->conn->prepare("INSERT INTO orders (order_code, order_name, order_address, order_phone, order_price, order_quantity, order_user_id, order_note) VALUES (:code, :name, :address, :phone, :price, :quantity, :user_id, :note)");
		$arr = [
			':code' => $code,
			':name' => $name,
			':address' => $address,
			':phone' => $phone,
			':price' => $price,
			':quantity' => $quantity,
			':user_id' => $user_id,
			':note' => $note
 		];
 		return $stmt->execute($arr);
	}
}

?>