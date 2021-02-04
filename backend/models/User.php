<?php  
include_once "models/Model.php";

class User extends Model {

	public function updateRoleUser($role, $id) {
		$stmt = $this->conn->prepare("UPDATE users SET role_id=:role WHERE id=:id");
		$arr = [
			':role' => $role,
			':id' => $id
		];
		return $stmt->execute($arr);
	} 

	public function getRoles() {
		$stmt = $this->conn->prepare("SELECT * FROM roles");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getUserById($id) {
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE id=:id");
		$arr = [
			':id' => $id
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function getAllUser() {
		$stmt = $this->conn->prepare("SELECT users.*, roles.* FROM users INNER JOIN roles WHERE users.role_id=roles.id");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function checkUserLogin($email, $password) {
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE user_email=:email AND user_password=:password");
		$arr = [
			':email' => $email,
			':password' => $password
		]; 
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}

?>