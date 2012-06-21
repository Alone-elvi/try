<?php 
class Blog{

	function SetConf($conf){
		$this->config = $conf;
	}

	function LoadModel(){
		$file = $this->config['base_url'].'/'.$this->config['models'].'/'.$this->config['model']['mdbase'];
		if (! (file_exists($file))){ 
			header("Status: 404 Not Found");
			header('HTTP/1.0 404 Not Found');
			echo 'File not found';
			return false;
		}
		else{
			include ($file);
			$db = new MDBase;
			//echo $this->config['db_table'];
			$db->show_table($this->config['db_table']);
		}
	}
}
?>