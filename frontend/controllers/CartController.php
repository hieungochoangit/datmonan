<?php  
include_once "controllers/Controller.php";
include_once "models/Product.php";

class CartController extends Controller {

	public function cart() {

		$idUser = $_SESSION['user']['id'];

		if (isset($_POST['id'])) {
			$id = $_POST['id'];
			$quantity = $_POST['quantity'];

			// Get detail product
			$product = new Product();
			$proDetail = $product->getProductById($id);

			if (!isset($_SESSION['cart'])) {
				$_SESSION['cart'][$id] = [
					'name' => $proDetail['product_name'],
					'thumbnail' => $proDetail['product_thumbnail'],
					'price' => $proDetail['product_price'],
					'quantity' => $quantity,
				];
			} else {
					if (array_key_exists($id, $_SESSION['cart'])) {
						$_SESSION['cart'][$id] = [
						'name' => $proDetail['product_name'],
						'thumbnail' => $proDetail['product_thumbnail'],
						'price' => $proDetail['product_price'],
						'quantity' => $quantity + $_SESSION['cart'][$id]['quantity']
					];
				} else {
					$_SESSION['cart'][$id] = [
						'name' => $proDetail['product_name'],
						'thumbnail' => $proDetail['product_thumbnail'],
						'price' => $proDetail['product_price'],
						'quantity' => $quantity
					];
				}
			}

			$count = count($_SESSION['cart']);
			echo $count;
		}
	}

	public function detail() {

		// echo '<pre>';
		// print_r($_SESSION['cart']);
		// die();

		$this->content = $this->view("views/cart/detail.php");
		include "views/layouts/content.php";
	}
}

?>