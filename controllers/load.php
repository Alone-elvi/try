<?php
spl_autoload_register ('autoload');
function autoload ($className){
	if(strpos($className,'model')===FALSE){
		if(strpos($className, 'view')===FALSE){
			$fileName = "controllers/{$className}.php";			
		}
		else{
			$fileName = "views/{$className}.php";			
		}
	}
	else{
		$fileName = "models/".$className.".php";
	}
	include  $fileName;	

  }
?>