<?php  
include_once "models/Model.php";

class User extends Model {

	public function checkUserLogin($email, $password) {
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE user_email=:email AND user_password=:password");
		$arr = [
			':email' => $email,
			':password' => $password
		];
		$stmt->execute($arr);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function insert($email, $password) {
		$stmt = $this->conn->prepare("INSERT INTO users (user_email, user_password) VALUES (:email, :password)");
		$arr = [
			':email' => $email,
			':password' => $password
		];
		return $stmt->execute($arr);
	}
}

?>