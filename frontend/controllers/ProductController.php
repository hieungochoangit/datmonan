<?php  
include_once "controllers/Controller.php";
include_once "models/Product.php";
include_once "models/Category.php";

class ProductController extends Controller {

	function detail() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		// Get detail
		$product = new Product();
		$productDetail = $product->getDetailProductByIdCategory($id);

		// category
		$category_id = $productDetail['category_id'];
		$productList = $product->getProduct($category_id);

		// Partner
		$partner = $product->getDetailPartner($productDetail['partner_id']);

		// Get all category
		$category = new Category();
		$cateList = $category->getAllCategory();

		$this->content = $this->view("views/product/detail.php", ['product' => $productDetail, 'products' => $productList, 'partner' => $partner, 'cateList' => $cateList]);
		include "views/layouts/content.php";
	}
}

?>