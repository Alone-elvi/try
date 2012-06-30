<?php

//require_once('config/conf.php');

class Main{
	function __construct(){
		$this->request = $_SERVER['REQUEST_URI'];
		$this->base_url = $_SERVER['DOCUMENT_ROOT'];
	}

	function include_file($file){
		if (! (file_exists($file))){
			header("Status: 404 Not Found");
			header('HTTP/1.0 404 Not Found');
			echo 'File not found';
			return false;
		}
		include($file);
	}
}

error_reporting(E_ALL);
ini_set('display_errors', '1');

$main = new Main;
$main->include_file("controllers/router.php");

$router = new Router($main->request);

$contr_name = $router->arr_parts['controller'];
$contr = new $contr_name($router->arr_parts);

$action_name = $router->arr_parts['action'];
if($action_name){
	$contr->$action_name();
}


?>
