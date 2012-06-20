<?php
class Main{
	function __construct(){
		$req = $_SERVER['REQUEST_URI'];
		$request = explode("/", $req);
		$file = $_SERVER[DOCUMENT_ROOT].'/view/'.$request[1].'/show.php';
		if (!(file_exists($file)) ){ 
			echo $file;
			return false;
		}
		else{
			$this->controller = $request[1];
			include ($file);
		}

	}
}

$main = new Main;
?>