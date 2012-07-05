<?php
class Library{
	static function include_file($file){
		if (! (file_exists($file))){
			header("Status: 404 Not Found");
			header('HTTP/1.0 404 Not Found');
			echo 'File not found';
			return false;
		}
		include($file);
	}
}
?>