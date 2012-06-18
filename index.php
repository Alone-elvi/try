<?php
	class Main{
		function __construct($r) {
		    $this->req = explode('/', $r);
		    $filename = '/'.strtolower($this->req[1]) . '.php';
		    $file =  'controllers' . $filename;

	    	if (file_exists($file) == false) {
	            return false;
		    }
		    include ($file);
		}


	}
	$main = new Main($_SERVER['REQUEST_URI']);
	$cl = new $main->req[1];
	
	if(isset ($main->req[2])){
		$cl->show();
	}

	error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>