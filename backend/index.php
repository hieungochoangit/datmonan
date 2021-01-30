<?php  

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = ucfirst(strtolower($controller)) . 'Controller';
$action = strtolower($action);

include "controllers/$controller.php";

$app = new $controller();
$app->$action();

?>