<?php  
include_once "controllers/Controller.php";

class UserController extends Controller {

	public function detail() {

		$this->content = $this->view("views/user/detail.php");
		include "views/layouts/content.php";
	}
}


?>