<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once ('library/library.php');

class Controller{
	function __construct(){
		$this->request = $_SERVER['REQUEST_URI'];
		$this->base_url = $_SERVER['DOCUMENT_ROOT'];
	}
}
$request = $_SERVER['REQUEST_URI'];
Library::include_file("controllers/router.php");

$router = new Router($request);

$contr_name = $router->arr_parts['controller'];
$contr = new $contr_name($router->arr_parts);

$action_name = $router->arr_parts['action'];
if($action_name){
	$contr->$action_name();
}
?>
