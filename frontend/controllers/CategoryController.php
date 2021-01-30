<?php  
include_once "controllers/Controller.php";
include_once "models/Store.php";
include_once "models/Category.php";

class CategoryController extends Controller {

	function detail() {
		
		$this->content = $this->view("views/category/detail.php");
		include "views/layouts/content.php";
	}
}

?>