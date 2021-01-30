<?php  
include_once "controllers/Controller.php";
include_once "models/Category.php";
include_once "models/Partner.php";

class ProductController extends Controller {

	function add() {
		// Get category
		$category = new Category();
		$cateList = $category->getAllCategoryActive();

		// Get store
		$partner = new Partner();
		$storeList = $partner->getAllStoreActive();

		// Submit
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$thumbnail = $_FILES['thumbnail'];
			$price = $_POST['price'];
			$sale = $_POST['sale'];
			$desc = $_POST['desc'];
			$status = $_POST['status'];
			$category = $_POST['category'];
			$store = $_POST['store'];

			// Validate
			if (empty($name) || $thumbnail['error'] != 0 || empty($price) || empty($desc)) {
				$this->error = "Vui lòng nhập đầy đủ";
			}
		}

		$this->content = $this->view("views/product/add.php", ['cateList' => $cateList, 'storeList' => $storeList, 'error' => $this->error]);
		include "views/layouts/content.php";
	}
}

?>