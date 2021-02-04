<?php 
include_once "controllers/Controller.php";
include_once "models/User.php";
include_once "models/Partner.php";
include_once "models/Product.php";

class PartnerController extends Controller {

	public function index() {
		// Get all user
		$user = new User();
		$users = $user->getAllUser();

		$this->content = $this->view("views/partner/index.php", ['users' => $users]);
		include "views/layouts/content.php";
	}

	public function detail() {
		// Get detail store
		$id = $_SESSION['admin']['id'];
		$partner = new Partner();
		$store = $partner->getDetailStore($id);


		$this->content = $this->view("views/partner/detail.php", ['store' => $store]);
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
					header("Location: http://localhost/datmonan/backend/index.php?controller=partner&action=detail");
					exit();
				}
			}
		}

		$this->content = $this->view("views/partner/create.php", ['error' => $this->error]);
		include "views/layouts/content.php";
	}

	public function profile() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		// get detail
		$partner = new Partner();
		$detail = $partner->getStoreById($id);

		$this->content = $this->view("views/partner/profile.php", ['detail' => $detail]);
		include "views/layouts/content.php";
	}

	public function update() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		// get detail
		$partner = new Partner();
		$detail = $partner->getStoreById($id);

		// Submit
		$thumbnaillUrl = $detail['partner_thumbnail'];

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$status = $_POST['status'];
			$thumbnail = $_FILES['thumbnail'];
			$desc = $_POST['desc'];

			if (empty($name)) {
				$this->error = "Không được rỗng";
			} else {
				if ($thumbnail['error'] == 0) {
					$thumbnaillUrl = $this->uploadFile($thumbnail);
				}
				// Update
				$result = $partner->updateStore($name, $thumbnaillUrl, $status, $desc, $id);

				if ($result) {
					header("Location: http://localhost/datmonan/backend/index.php?controller=partner&action=detail");
					exit();
				}
			}

		}

		$this->content = $this->view("views/partner/update.php", ['detail' => $detail, 'error' => $this->error]);
		include "views/layouts/content.php";
	}

	public function product() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		// Get product
		$product = new Product();
		$products = $product->getAllProductByIdPartner($id);

		$this->content = $this->view("views/partner/product.php", ['products' => $products]);
		include "views/layouts/content.php";
	}

	public function delete() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		header("Location: http://localhost/datmonan/backend/index.php?controller=partner&action=detail");
	}

	public function edit() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		// Get info
		$user = new User();
		$detail = $user->getUserById($id);

		$this->content = $this->view("views/partner/edit.php", ['user' => $detail]);
		include "views/layouts/content.php";
	}

	public function role() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$user = new User();

		// Get all role
		$roles = $user->getRoles();

		// submit
		if (isset($_POST['submit'])) {
			$role = $_POST['role'];

			// update
			$update = $user->updateRoleUser($role, $id);
			if ($update) {
				header("Location: http://localhost/datmonan/backend/index.php?controller=partner");
				exit();
			}
		}

		$this->content = $this->view("views/partner/role.php", ['roles' => $roles]);
		include "views/layouts/content.php";
	}
}

?>