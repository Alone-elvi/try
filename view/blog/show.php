<?php
	
if ((file_exists($file)) ){ 
	include($_SERVER['DOCUMENT_ROOT'].'/models/mdbase.php');
}
else{
	return "Have not find DB model";
}
	$db = new MDBase;
	$db->show_table('al_main');
?>	