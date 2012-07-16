<?php
class Blog extends Controller{
	
	private $data = array();

	static function show($req){
		$res = model_blog::where("id",1);
		$data['test'] = $res['title'];
		Library::view($data);
	}

	static function find($req){
		$data['title'] = 'This is find page!';
		Library::view($data);
	}

	static function add($id){
		$res = model_blog::where("id",1);
		Library::view($data);
		var_dump($res);
	}
}
?>
