<?php
class show{
	function __construct($conf, $req){
		$this->config = $conf;
		$this->requset = $req;
		$file = $this->config['base_url'].'/'.$this->config['models'].'/mdbase.php';
		if (! (file_exists($file))){ 
			header("Status: 404 Not Found");
			header('HTTP/1.0 404 Not Found');
			echo 'File not found';
			return false;
		}
		else{
			include($file);
		}
	}	

	function view(){
			$db = new MDBase($this->config);
			if (! is_numeric($this->requset[2]) || $db->table_count()){
				$result=$db->get_row(1);
			}
			else{
				$result=$db->get_row($this->requset[2]);
			}
			$file_show = $this->config['base_url'].'/'.$this->config['views'].'/'.$this->config['curr_req'].'/'.$this->config['curr_req'].'_view.php';
			if (! (file_exists($file_show))){ 
				header("Status: 404 Not Found");
				header('HTTP/1.0 404 Not Found');
				echo 'File not found';
				return false;
			}
			else{
 				include($file_show);
 			}
 	}

}
?>