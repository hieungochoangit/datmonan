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

	public function control() {

		include "views/layouts/content.php";
	}

	public function detail() {
		$this->content = $this->view("views/partner/detail.php");
		include "views/layouts/content.php";
	}

	public function create() {
		// Submit
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$thumbnail = $_FILES['thumbnail'];
			$status = $_POST['status'];


			// Validate 
			if (empty($name) || empty($thumbnail)) {
				$this->error = "Không được để rỗng";
			}
		}

		$this->content = $this->view("views/partner/create.php", ['error' => $this->error]);
		include "views/layouts/content.php";
	}


}

?>