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

		$this->content = $this->view("views/product/add.php", ['cateList' => $cateList, 'storeList' => $storeList]);
		include "views/layouts/content.php";
	}
}

?>