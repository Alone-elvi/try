<?php
class Main{
	function __construct(){
		$this->req = $_SERVER['REQUEST_URI'];
		trim($this->req,'/');
		$this->req = explode("/", $this->req);		
	}

	function setReq($add_req){
		$this->req = $_SERVER['REQUEST_URI'];
		trim($this->req,'/');
		$this->req = explode("/", $this->req.$add_req);		
	}
}
error_reporting(E_ALL);
ini_set('display_errors', '1');

$main = new Main;

if(count($main->req)<=2){
	$main->setReq('view');
}
else{
	switch($main->req[2]){
		case 'view' : break;
		default 		: $main->setReq('view'); break;
	}
}

if(isset($main->req[3])){
	$req_arr=$main->req;
	$req_arr[3]='show.php';
	$request="";
	$request.=implode("/", $req_arr);
	$request[0]='/';
	$file = $request;
	if (! (file_exists($file)) ){ 
		echo "Arbeiten".$file;
		include($file);
	}
	else{
		echo "Not Arbeiten";
	}
}


?>