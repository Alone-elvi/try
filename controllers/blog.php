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
//			$db->show_table($this->config['db_table']);


			$file_show = $this->config['base_url'].'/'.$this->config['view'].'/'.$this->config['curr_req'].'/show.php';
			if (! (file_exists($file_show))){ 
				header("Status: 404 Not Found");
				header('HTTP/1.0 404 Not Found');
				echo 'File not found';
				return false;
			}
			else{
				$result['header'] = array (
																		'<a href="#">Домой</a>',
																		'<a href="#">Блог</a>',
																		'<a href="#">Фото</a>',
																		'<a href="#">КОнтакты</a>',
				);
				$result['title'] = "We are the champions";
				$result['content'] = "CONTENT";
				$result['footer'] = "2012 YaiHu";

 				include ($file_show);

			}

		}
	}
}
?>