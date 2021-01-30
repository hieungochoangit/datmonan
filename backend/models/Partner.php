<?php  
include_once "models/Model.php";

class Partner extends Model {

	public function updateStore($name, $thumbnail, $status, $id) {
		$stmt = $this->conn->prepare("UPDATE partners SET partner_name=:name, partner_thumbnail=:thumbnail, partner_status=:status WHERE id=:id");
		$arr = [
			':name' => $name,
			':thumbnail' => $thumbnail,
			':status' => $status,
			':id' => $id
		];
		return $stmt->execute($arr);
	}

	public function getStoreById($id) {
		$stmt = $this->conn->prepare("SELECT * FROM partners WHERE id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function getDetailStore($id) {
		$stmt = $this->conn->prepare("SELECT * FROM partners WHERE user_id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function insert($name, $thumbnail, $status, $id) {
		$stmt = $this->conn->prepare("INSERT INTO partners (partner_name, partner_thumbnail, partner_status, user_id) VALUES (:name, :thumbnail, :status, :id)");
		$arr = [
			':name' => $name,
			':thumbnail' => $thumbnail,
			':status' => $status,
			':id' => $id
		]; 
		return $stmt->execute($arr);
	}
}

?>