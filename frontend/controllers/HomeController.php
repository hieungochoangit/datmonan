<?php  
include_once "controllers/Controller.php";
include_once "models/Store.php";
include_once "models/Category.php";

class HomeController extends Controller {

	function index() {
		// Get all store
		$store = new Store();
		$storeList = $store->getAllStore();

		// Get all category
		$category = new Category();
		$cateList = $category->getAllCategory();

		$this->content = $this->view("views/home/index.php", ['storeList' => $storeList, 'cateList' => $cateList]);
		include "views/layouts/content.php";
	}
}

?>