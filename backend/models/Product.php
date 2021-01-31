<?php  
include_once "models/Model.php";

class Product extends Model {

	public function insert($name, $thumbnail, $price, $sale, $desc, $status, $parent, $cate) {
		$stmt = $this->conn->prepare("INSERT INTO products (product_name, product_thumbnail, product_price, product_sale_price, product_desc, product_status, partner_id, category_id) VALUES (:name, :thumbnail, :price, :sale, :desc, :status, :parent, :category)");
		$arr = [
			':name' => $name,
			':thumbnail' => $thumbnail,
			':price' => $price,
			':sale' => $sale,
			':desc' => $desc,
			':status' => $status,
			':parent' => $parent,
			':category' => $cate
		];
		return $stmt->execute($arr);
	}
}

?>