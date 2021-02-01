<?php  
include_once "controllers/Controller.php";

class LoginController extends Controller {

	public function login() {

		$this->content = $this->view("views/login/login.php");
		include "views/layouts/content.php";
	}

	public function signup() {

		$this->content = $this->view("views/login/signup.php");
		include "views/layouts/content.php";
	}
}

?>