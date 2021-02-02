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

		// Submit
		if (isset($_POST['submit'])) {
			$quantity = $_POST['quantity'];
			
			if ($quantity < 0) {
				$this->error = "Không được < 0";
			} else {
				if (!isset($_SESSION['cart'])) {
					$_SESSION['cart'][$id] = [
						'name' => $productDetail['product_name'],
						'thumbnail' => $productDetail['product_thumbnail'],
						'price' => $productDetail['product_price'],
						'quantity' => $quantity,
					];
				} else {
					if (array_key_exists($id, $_SESSION['cart'])) {
						$_SESSION['cart'][$id] = [
						'name' => $productDetail['product_name'],
						'thumbnail' => $productDetail['product_thumbnail'],
						'price' => $productDetail['product_price'],
						'quantity' => $quantity + $_SESSION['cart'][$id]['quantity']
					];
					} else {
							$_SESSION['cart'][$id] = [
							'name' => $productDetail['product_name'],
							'thumbnail' => $productDetail['product_thumbnail'],
							'price' => $productDetail['product_price'],
							'quantity' => $quantity,
						];
					}
				}

				header("Location: http://localhost/datmonan/frontend/index.php?controller=cart&action=detail");
				exit();
			}
		}

		$this->content = $this->view("views/product/detail.php", ['product' => $productDetail, 'products' => $productList, 'partner' => $partner, 'cateList' => $cateList, 'error' => $this->error]);
		include "views/layouts/content.php";
	}
}

?>