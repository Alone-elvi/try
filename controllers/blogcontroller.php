<?php 
class BlogController {
	function __construct(){
		$file = $_SERVER['DOCUMENT_ROOT'].'/models/mdbase.php';
		if (! (file_exists($file)) ){ 
				echo "File ".$file." not found";
				return false;
		}
		include ($file);
		$this->db = new MDBase;
	}
	function show(){
		
		$this->db->show_table('al_main');
	}
}
?>