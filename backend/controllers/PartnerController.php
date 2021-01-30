<?php 
include_once "controllers/Controller.php";
include_once "models/User.php";

class PartnerController extends Controller {

	public function index() {
		// Get all user
		$user = new User();
		$users = $user->getAllUser();

		$this->content = $this->view("views/partner/index.php", ['users' => $users]);
		include "views/layouts/content.php";
	}

	public function create() {

		$this->content = $this->view("views/partner/create.php");
		include "views/layouts/content.php";
	}
}

?>