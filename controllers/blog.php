<?php
class Blog extends Main{

	function __construct($parts){
		$this->parts = $parts;
		$this->dir = "{$this->parts['dirs']['views_dir']}/{$this->parts['controller']}";
	}
	
	function render($params)
	{
		$file = "{$this->dir}/{$this->parts['action']}.php";
		$this->params = $params;
		$this->include_file($file);
	}
	function show(){
		$data = array(
			'test' => 'Hello!'
		);
		$this->render($data);
		// $file = $this->config['base_url'].'/'.$this->config['controllers'].'/show.php';
		// if (! (file_exists($file))){
		// 	header("Status: 404 Not Found");
		// 	header('HTTP/1.0 404 Not Found');
		// 	echo 'File not found';
		// 	return false;
		// }
		// else{
		// 	include ($file);
		// 	$view_show = new show($this->config, $this->requset);
		// 	$view_show->view();
		// }
	}

	function find(){
		$data = array(
			'title' => 'This is find page!'
		);
		$this->render($data);
	}
}
?>
