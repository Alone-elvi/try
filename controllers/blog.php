<?php
class Blog extends Controller{

	function __construct($parts){
		$this->parts = $parts;
		$this->dir = "{$this->parts['dirs']['views_dir']}/{$this->parts['controller']}";
	}
	
	function render($params)
	{
		$file = "{$this->dir}/{$this->parts['action']}.php";
		Library::include_file($file, $params);
	}

	function show(){
		$data = array(
			'test' => 'Hello!'
		);
		$this->render($data);
	}

	function find(){
		$data = array(
			'title' => 'This is find page!'
		);
		$this->render($data);
	}
}
?>
