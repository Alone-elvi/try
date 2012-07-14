<?php
class Blog extends Controller{
	
	private $data = array();

	function show($req){
		$res = model_blog::where("id",1);
		$data['test'] = $res['title'];
		Library::render($req, $data);
	}

	function find($req){
		$data['title'] = 'This is find page!';
		Library::render($req, $data);
	}
}
?>
