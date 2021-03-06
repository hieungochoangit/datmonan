<?php  
include_once "controllers/Controller.php";
include_once "models/Category.php";

class CategoryController extends Controller {

	public function index() {
		// Get all category
		$category = new Category();
		$cateList = $category->getAllCategory();

		$this->content = $this->view("views/category/index.php", ['cateList' => $cateList]);
		include "views/layouts/content.php";
	}

	public function add() {
		// Submit
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$thumbnail = $_FILES['thumbnail'];
			$status = $_POST['status'];

			// Validate
			if (empty($name) || $thumbnail['error'] != 0) {
				$this->error = "Không được rỗng";
			} else {
				$thumbnailUrl = $this->uploadFile($thumbnail);

				// Add to database
				$category = new Category();
				$add = $category->insert($name, $thumbnailUrl, $status);

				if ($add) {
					header("Location: http://localhost/datmonan/backend/index.php?controller=category");
					exit();
				}
			}
		}

		$this->content = $this->view("views/category/add.php", ['error' => $this->error]);
		include "views/layouts/content.php";
	}

	function update() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		// Get detail category
		$category = new Category();
		$catDetail = $category->getCategoryById($id);

		// Submit
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$thumbnail = $_FILES['thumbnail'];
			$status = $_POST['status'];

			$thumbnailUrl = $catDetail['category_thumbnail'];

			// Validate
			if (empty($name)) {
				$this->error = "Không được rỗng";
			} else {
				if ($thumbnail['error'] == 0) {
					$thumbnailUrl = $this->uploadFile($thumbnail);
				}

				// Update
				$update = $category->updateCategory($name, $thumbnailUrl, $status, $id);
				if ($update) {
					header("Location: http://localhost/datmonan/backend/index.php?controller=category");
					exit();
				}
			}
		}

		$this->content = $this->view("views/category/update.php", ['category' => $catDetail, 'error' => $this->error]);
		include "views/layouts/content.php";
	}
}

?>