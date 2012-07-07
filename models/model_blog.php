<?php 
require_once ('models/mdbase.php');

class model_blog extends Models{
	private static $request = array();
	function __construct(){

	}
	static function where($req, $id){
		$base = new MDBase;
		$contr = self::getParts();
		$table = $contr['controller'];
		$res = $base->db->query("SELECT * FROM {$table} WHERE {$req}={$id}");
 		return $res->fetch();
	}
}
?>