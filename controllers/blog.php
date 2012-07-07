<?php
class Blog extends Controller{
	
	private $data = array();

	function __construct($parts){
		$this->parts = $parts;
		Library::include_file("models/models.php");
		$model = new Models($this->parts);
		Library::include_file("models/model_{$this->parts['controller']}.php");
	}

	function show(){
		$res = model_blog::where("id",1);
		$data['test'] = $res['title'];
		Library::render($this->parts, $data);
	}

	function find(){
		$data['title'] = 'This is find page!';
		Library::render($this->parts, $data);
	}
}
?>
