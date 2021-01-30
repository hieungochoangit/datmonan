<?php 
include_once "controllers/Controller.php";
include_once "models/User.php";
include_once "models/Partner.php";

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
			if (empty($name) || $thumbnail['error'] != 0) {
				$this->error = "Không được để rỗng";
			} else {
				$thumbnaillUrl = $this->uploadFile($thumbnail);
				$id = $_SESSION['admin']['id'];
				// Add to database
				$partner = new Partner();
				$result = $partner->insert($name, $thumbnaillUrl, $status, $id);

				if ($result) {
					$_SESSION['success'] = "Thêm thành công";
					header("Location: http://localhost/datmonan/backend/index.php?controller=partner&action=control");
					exit();
				}
			}
		}

		$this->content = $this->view("views/partner/create.php", ['error' => $this->error]);
		include "views/layouts/content.php";
	}


}

?>