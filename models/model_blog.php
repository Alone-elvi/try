<?php 
class model_blog extends Blog{

	private static $request = array();
	function __construct(){
	}

	static function hello(){
		echo "model_blog class";
	}
	static function where($req, $id){
		$table = get_parent_class();
		$db=model_MDBase::get_db();
		$res = $db->query("SELECT * FROM {$table} WHERE {$req}={$id}");
 		return $res->fetch();
	}
}
?>