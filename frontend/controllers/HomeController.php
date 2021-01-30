<?php  
include_once "controllers/Controller.php";

class HomeController extends Controller {

	function index() {
		$this->content = $this->view("views/home/index.php");
		include "views/layouts/content.php";
	}
}

?>