<?php  

class Controller {

	public $content = '';
	public $error = '';

	public function __construct() {
		if (!isset($_SESSION['admin'])) {
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

	function uploadFile($avatar) {
        if ($avatar['error'] == 0) {
            $nameAvatar = $avatar['name'];
            $tmpAvatar = $avatar['tmp_name'];
            $sizeAvatar = $avatar['size'];
            $typeAvatar = $avatar['type'];
            $errorAvatar = $avatar['error'];

            $nameSlug = $this->to_slug($nameAvatar);
            $ext = pathinfo($nameAvatar, PATHINFO_EXTENSION);
            $newDestination = "../uploads/products/$nameSlug.$ext";
            move_uploaded_file($tmpAvatar, $newDestination);
        }
        return $newDestination;
    }

    function to_slug($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }

}

?>