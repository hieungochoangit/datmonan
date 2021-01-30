<?php 
include_once "models/User.php"; 

class LoginController {

	function login() {
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			// Validate
			if (empty($email) || empty($password)) {
				$this->error = "Không được để rỗng.";
			} else {
				// Check user login
				$user = new User();
				$account = $user->checkUserLogin($email, $password);

				if ($account) {
					$_SESSION['admin'] = $account;
					
					if ($account['role_id'] == 1) {
						header("Location: http://localhost/datmonan/backend/index.php");
						exit(); 
					} else if ($account['role_id'] == 2) {
						header("Location: http://localhost/datmonan/backend/index.php?controller=partner&action=control");
							exit(); 
					}

				} else {
					$this->error = "Tài khoản hoặc mật khẩu không đúng";
				}
			}
		}

		include "views/user/login.php";
	}
}

?>