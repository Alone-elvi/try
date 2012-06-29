<?php 
class Blog{

	function __construct($conf, $req){
		$this->config = $conf;
		$this->requset = $req;
	}

	function show(){
		$file = $this->config['base_url'].'/'.$this->config['controllers'].'/show.php';
		if (! (file_exists($file))){ 
			header("Status: 404 Not Found");
			header('HTTP/1.0 404 Not Found');
			echo 'File not found';
			return false;
		}
		else{
			include ($file);
			$view_show = new show($this->config, $this->requset);
			$view_show->view();
		}
	}
}
?>