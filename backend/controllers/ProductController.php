<?php  
include_once "controllers/Controller.php";
include_once "models/Category.php";
include_once "models/Partner.php";
include_once "models/Product.php";

class ProductController extends Controller {

	function index() {
		$id = $_SESSION['admin']['id'];
		// Get all product
		$product = new Product();
		$products = $product->getAllProduct($id);

		$this->content = $this->view("views/product/index.php", ['products' => $products]);
		include "views/layouts/content.php";
	}

	function add() {
		// Get category
		$category = new Category();
		$cateList = $category->getAllCategoryActive();

		$id = $_SESSION['admin']['id'];

		// Get store
		$partner = new Partner();
		$storeList = $partner->getAllStoreActive($id);

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

	public function detail() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		$product = new Product();
		$productDetail = $product->getProductById($id);

		

		$this->content = $this->view("views/product/detail.php", ['product' => $productDetail]);
		include "views/layouts/content.php";
	}

	public function update() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		// Get product detail
		$product = new Product();
		$productDetail = $product->getProductById($id);

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

			$thumbnailUrl = $productDetail['product_thumbnail'];

			// Validate
			if ($thumbnail['error'] == 0) {
				$thumbnailUrl = $this->uploadFile($thumbnail);
			}
			// Update
			$update = $product->updateProduct($name, $thumbnailUrl, $price, $sale, $desc, $status, $store, $category, $id);
			if ($update) {
				header("Location: http://localhost/datmonan/backend/index.php?controller=product");
				exit();
			}
		}

		

		$this->content = $this->view("views/product/update.php", ['product' => $productDetail, 'cateList' => $cateList, 'storeList' => $storeList, 'error' => $this->error]);
		include "views/layouts/content.php";
	}
}

?>