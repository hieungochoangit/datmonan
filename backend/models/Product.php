<?php  
include_once "models/Model.php";

class Product extends Model {

	public function getAllProduct() {
		$stmt = $this->conn->prepare("SELECT partners.*, categories.*, products.* FROM partners INNER JOIN categories, products WHERE partners.id=products.partner_id AND partners.partner_status=0 AND categories.id=products.category_id");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getAllProductByIdPartner($id) {
		$stmt = $this->conn->prepare("SELECT partners.*, categories.*, products.* FROM partners INNER JOIN categories, products WHERE partners.id=products.partner_id AND partners.partner_status=0 AND categories.id=products.category_id AND partners.id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

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