<?php  
include_once "controllers/Controller.php";
include_once "models/User.php";

class LoginController extends Controller {

	public function login() {
		// submit
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			// Validate
			if (empty($email) || empty($password)) {
				$this->error = "Không được để rỗng";
			} else {
				// Add user to database
				$user = new User();
				$checkUserLogin = $user->checkUserLogin($email, $password);

				if (!$checkUserLogin) {
					$this->error = "Email hoặc mật khẩu sai";
				} else {
					$_SESSION['user'] = $checkUserLogin;
					header("Location: http://localhost/datmonan/frontend/index.php");
					exit();
				}
			}
		}

		$this->content = $this->view("views/login/login.php", ['error' => $this->error]);
		include "views/layouts/content.php";
	}

	public function signup() {
		// submit
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			// Validate
			if (empty($email) || empty($password)) {
				$this->error = "Không được để rỗng";
			} else {
				// Add user to database
				$user = new User();
				$insert = $user->insert($email, $password);

				if ($insert) {
					header("Location: http://localhost/datmonan/frontend/index.php?controller=login&action=login");
					exit();
				}
			}
		}

		$this->content = $this->view("views/login/signup.php", ['error' => $this->error]);
		include "views/layouts/content.php";
	}
}

?>