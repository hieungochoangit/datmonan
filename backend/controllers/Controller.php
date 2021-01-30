<?php  

class Controller {

	public $content = '';
	public $error = '';

	public function __construct() {
		if (!isset($_GET['admin'])) {
			$_SESSION['notify'] = "Bạn chưa đăng nhập."; 
			header("Location: index.php?controller=login&action=login");
			exit();
		}
	}

	public function view($path, $arr = []) {
		ob_start();
		extract($arr);
		include $path;
		return ob_get_clean();
	}
}

?>