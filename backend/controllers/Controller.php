<?php  

class Controller {

	public $content = '';
	public $error = '';

	public function view($path, $arr = []) {
		ob_start();
		extract($arr);
		include $path;
		return ob_get_clean();
	}
}

?>