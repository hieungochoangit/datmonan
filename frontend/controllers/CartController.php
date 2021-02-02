<?php  
include_once "controllers/Controller.php";
include_once "models/Product.php";
include_once "models/Cart.php";

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
		// Submit
		if (isset($_POST['order'])) {
			$name = $_POST['name'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$note = $_POST['note'];
			$code = rand(0, 100000);
			$idUser = $_SESSION['user']['id'];

			// Validate

			// Check empty cart
			if (empty($_SESSION['cart'])) {
				$this->error = "Khong co san pham, mua hang ngay";
			} else if (empty($name) || empty($address) || empty($phone)) {
				$this->error = "Khong duoc rong";
			} else {
				// add to database, table orders
				$totalPrice = 0;
				foreach ($_SESSION['cart'] as $key => $value) {
					$totalPrice += $value['price'] * $value['quantity'];
				}
				$cart = new Cart();
				$order = $cart->addOrder($code, $name, $address, $phone, $totalPrice, count($_SESSION['cart']), $idUser, $note);

				if ($order) {
					$order = $cart->getIdOrderByIdUser($idUser);
					$idOrder = $order['id'];

					foreach ($_SESSION['cart'] as $key => $value) {
						$result = $cart->addOrderDetail($key, $value['name'], $value['thumbnail'], $value['quantity'], $value['price'], $idOrder);
					}

					unset($_SESSION['cart']);
					header("Location: http://localhost/datmonan/frontend/index.php");
					exit();
				}
			}
		}

		$this->content = $this->view("views/cart/detail.php", ['error' => $this->error]);
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