<?php
class Library{
	private static $params = array();

	static function include_file($file){
		if (! (file_exists($file))){
			header("Status: 404 Not Found");
			header('HTTP/1.0 404 Not Found');
			echo 'File not found';
			return false;
		}
		if((func_num_args())>=2){
			self::$params = func_get_arg(1);
		}
		include($file);
	}

	static function render($parts, $params)
	{
		$dir = "{$parts['dirs']['views_dir']}/{$parts['controller']}";
		$file = "{$dir}/{$parts['action']}.php";
		self::include_file($file, $params);
	}

}
?>