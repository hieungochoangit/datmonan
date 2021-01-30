<?php  
include_once "controllers/Controller.php";
include_once "models/Store.php";

class HomeController extends Controller {

	function index() {
		// Get all store
		$store = new Store();
		$storeList = $store->getAllStore();

		$this->content = $this->view("views/home/index.php", ['storeList' => $storeList]);
		include "views/layouts/content.php";
	}
}

?>