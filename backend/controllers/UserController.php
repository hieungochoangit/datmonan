<?php  
include_once "controllers/Controller.php";

class UserController extends Controller {

	public function logout() {
		if (isset($_SESSION['admin'])) {
			unset($_SESSION['admin']);
			header("Location: index.php?controller=login&action=login");
		}
	}
}

?>