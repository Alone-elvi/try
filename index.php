<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
include ('controllers/load.php');
require_once ('library/library.php');

$req = router::get_request($_SERVER['REQUEST_URI']);
$req['controller']::$req['action']($req);




/*$request = $_SERVER['REQUEST_URI'];
Library::include_file("controllers/router.php");

$router = new Router($request);

$contr_name = $router->arr_parts['controller'];
$contr = new $contr_name($router->arr_parts);

$action_name = $router->arr_parts['action'];
if($action_name){
	$contr->$action_name();
}*/
?>
