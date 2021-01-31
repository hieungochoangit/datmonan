<?php  
include_once "controllers/Controller.php";
include_once "models/Category.php";
include_once "models/Partner.php";
include_once "models/Product.php";

class ProductController extends Controller {

	function index() {

		$this->content = $this->view("views/product/index.php");
		include "views/layouts/content.php";
	}

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
			} else {
				$thumbnailUrl = $this->uploadFile($thumbnail);

				// add to database
				$product = new Product();
				$add = $product->insert($name, $thumbnailUrl, $price, $sale, $desc, $status, $store, $category);

				if ($add) {
					header("Location: http://localhost/datmonan/backend/index.php?controller=product");
					exit();
				}
			}
		}

		$this->content = $this->view("views/product/add.php", ['cateList' => $cateList, 'storeList' => $storeList, 'error' => $this->error]);
		include "views/layouts/content.php";
	}
}

?>