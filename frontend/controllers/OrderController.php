<?php  
include_once "controllers/Controller.php";
include_once "models/Order.php";

class OrderController extends Controller {

	public function index() {
		// get all order
		$id = $_SESSION['user']['id'];

		$order = new Order();
		$orders = $order->getAllOrderByIdUser($id);

		$this->content = $this->view("views/order/index.php", ['orders' => $orders]);
		include "views/layouts/content.php";
	}

	public function detail() {
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		$order = new Order();
		$orderDetail = $order->getOrderById($id);

		// Get detail order
		$products = $order->getDetailOrderById($id);

		$this->content = $this->view("views/order/detail.php", ['order' => $orderDetail, 'products' => $products]);
		include "views/layouts/content.php";
	}
}

?>