<?php 

class Router{
  private $dirs = array('controllers_dir'=>'controllers', 'views_dir' => 'views', 'models_dir' => 'models');
  
  public $arr_parts = array('controller' => '', 'action' => '', 'value' => '');

  function __construct($request){
		$this->request = $request;
		$route = (empty($request)) ? '' : $request;
		if (empty($route)){
			$this->arr_parts['controller'] = 'index';
		}
		$route = trim($route, '/\\');
		$parts = explode('/', $route);

		$fullpath = $_SERVER['DOCUMENT_ROOT'];

		$file_controller = $fullpath.'/'.$this->dirs['controllers_dir'].'/'.$parts[0].'.php';
		if(is_file($file_controller)){

//Проба попользоваться статичной функцией

			Library::include_file($file_controller);

			$this->arr_parts['controller'] = $parts[0];
			if(is_dir($fullpath.'/'.$this->dirs['views_dir'].'/'.$parts[0])){
				if(isset($parts[1])){
					$file_action = $fullpath.'/'.$this->dirs['views_dir'].'/'.$parts[0].'/'.$parts[1].'.php';
					if(is_file($file_action)){
						$this->arr_parts['action'] = $parts[1];
					}
				}
			}
			for($i = 2; $i < count($parts); $i++){
				$this->arr_parts['value'][$i] = $parts[$i];
			}
		}
		else {
			$this->arr_parts['controller'] = "index";
		}
		$this->arr_parts['dirs'] = $this->dirs;
		return $this->arr_parts;
  }
}
?>