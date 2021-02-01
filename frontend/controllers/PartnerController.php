<?php  
include_once "controllers/Controller.php";
include_once "models/Partner.php";

class PartnerController extends Controller {

	public function product() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		// Get all product
		$partner = new Partner();
		$products = $partner->getAllProduct($id);

		$this->content = $this->view("views/partner/index.php", ['products' => $products]);
		include "views/layouts/content.php";
	}
}

?>