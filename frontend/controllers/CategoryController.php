<?php  
include_once "controllers/Controller.php";
include_once "models/Store.php";
include_once "models/Category.php";
include_once "models/Product.php";

class CategoryController extends Controller {

	function detail() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		// Get product
		$product = new Product();
		$productList = $product->getAllProductByIdCategory($id);

		// echo '<pre>';
		// var_dump($productList);
		// die();
		
		$this->content = $this->view("views/category/detail.php", ['products' => $productList]);
		include "views/layouts/content.php";
	}
}

?>