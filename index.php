<?php
class Controller{
	function __construct(){
		$this->library = new Library;
		$this->library->include_file("controllers/router.php");
		$this->request = $_SERVER['REQUEST_URI'];
		$this->base_url = $_SERVER['DOCUMENT_ROOT'];
	}
}

error_reporting(E_ALL);
ini_set('display_errors', '1');
require ('library/library.php');

$main = new Controller;

$router = new Router($main->request);

$contr_name = $router->arr_parts['controller'];
$contr = new $contr_name($router->arr_parts);

$action_name = $router->arr_parts['action'];
if($action_name){
	$contr->$action_name();
}


?>
