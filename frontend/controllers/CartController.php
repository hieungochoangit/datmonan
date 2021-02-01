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

	public function update() {
		if (isset($_POST['id']) && $_POST['quantity']) {
			$id = $_POST['id'];
			$quantity = $_POST['quantity'];

			$_SESSION['cart'][$id] = [
				'name' => $_SESSION['cart'][$id]['name'],
				'thumbnail' => $_SESSION['cart'][$id]['thumbnail'],
				'price' => $_SESSION['cart'][$id]['price'],
				'quantity' => $quantity,
			];

			echo json_encode($_SESSION['cart']);
		}
	}

	public function delete() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		unset($_SESSION['cart'][$id]);
		header("Location: http://localhost/datmonan/frontend/index.php?controller=cart&action=detail");
	}
}

?>