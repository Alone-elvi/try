<?php 
class Blog{

	function __construct($conf, $req){
		$this->config = $conf;
		$this->requset = $req;
	}

	function show(){
		$file = $this->config['base_url'].'/'.$this->config['models'].'/'.$this->config['model']['mdbase'];
		if (! (file_exists($file))){ 
			header("Status: 404 Not Found");
			header('HTTP/1.0 404 Not Found');
			echo 'File not found';
			return false;
		}
		else{
			include ($file);
			$db = new MDBase($this->config);

			$file_show = $this->config['base_url'].'/'.$this->config['views'].'/'.$this->config['curr_req'].'/show.php';
			if (! (file_exists($file_show))){ 
				header("Status: 404 Not Found");
				header('HTTP/1.0 404 Not Found');
				echo 'File not found';
				return false;
			}
			else{
 				include ($file_show);
 				$str = ($this->config['curr_req']."(".$this->requset[2].")");
 				echo $str;
 				$model = new $str;
			}
		}
	}
}
?>