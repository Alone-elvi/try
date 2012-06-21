<?php


class Main{
	function __construct(){
		require('config/conf.php');
    $this->config = $conf;
		$req = $_SERVER['REQUEST_URI'];
		$this->request = explode("/", $req);

	}

	function LoadContr($request){
		//$ret=false;
		for ($i = 0; $i <count($this->config['controller']) ; $i++) {
			$r = each($this->config['controller']);
			if($r['key']==$request[1]){
				$file = $this->config['base_url'].'/'.$this->config['controllers'].'/'.$this->config['controller'][$request[1]];
				if (! (file_exists($file))){ 
					$ret = false;
				}
				else{
					include ($file);
					$ret = true;
					return $ret;
				}
			}
			else{
				$ret = false;
			}
		}

		return $ret;
	}
}

error_reporting(E_ALL);
ini_set('display_errors', '1');

$main = new Main;
$err = $main->LoadContr($main->request);

if($err!=false){
	$contr = new $main->request[1];
	$main->config['db_table']=$main->request[1];

	$contr->SetConf($main->config);
	$contr->LoadModel();
}
else{
	header("Status: 404 Not Found");
	header('HTTP/1.0 404 Not Found');
	echo 'File not found';
	echo("<img src=\"/images/404.jpg\">");
}
?>