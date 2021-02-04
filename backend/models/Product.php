<?php  
include_once "models/Model.php";

class Product extends Model {

	public function updateProduct($name, $thumbnail, $price, $sale, $desc, $status, $partner_id, $category_id, $id) {
		$stmt = $this->conn->prepare("UPDATE products SET product_name=:name, product_thumbnail=:thumbnail, product_price=:price, product_sale_price=:sale, product_desc=:desc, product_status=:status, partner_id=:partner_id, category_id=:category_id WHERE id=:id");
		$arr = [
			':name' => $name,
			':thumbnail' => $thumbnail,
			':price' => $price,
			':sale' => $sale,
			':desc' => $desc,
			':status' => $status,
			':partner_id' => $partner_id,
			':category_id' => $category_id,
			':id' => $id
		];
		return $stmt->execute($arr);
	}

	public function getProductById($id) {
		$stmt = $this->conn->prepare("SELECT partners.*, categories.*, products.* FROM partners INNER JOIN categories, products WHERE partners.id=products.partner_id AND partners.partner_status=0 AND categories.id=products.category_id AND products.id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function getAllProduct($id) {
		$stmt = $this->conn->prepare("SELECT partners.*, categories.*, products.* FROM partners INNER JOIN categories, products WHERE partners.id=products.partner_id AND partners.partner_status=0 AND categories.id=products.category_id AND products.partner_id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
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