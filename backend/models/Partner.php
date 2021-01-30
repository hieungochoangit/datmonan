<?php  
include_once "models/Model.php";

class Partner extends Model {

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