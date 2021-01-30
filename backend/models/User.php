<?php  
include_once "models/Model.php";

class User extends Model {

	public function getAllUser() {
		$stmt = $this->conn->prepare("SELECT users.*, roles.* FROM users INNER JOIN roles WHERE users.role_id=roles.id");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function checkUserLogin($email, $password) {
		$stmt = $this->conn->prepare("SELECT users.*, roles.* FROM users INNER JOIN roles WHERE users.user_email=:email AND users.user_password=:password AND users.role_id=1");
		$arr = [
			':email' => $email,
			':password' => $password
		]; 
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}

?>