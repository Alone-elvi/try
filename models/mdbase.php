<?php
	class MDBase{
		var $host='localhost';
		var $dbname = 'try';
		var $user = 'root';
		var $password = 'root';
		public function __construct($conf){
			try{
				$str='mysql:host='.$this->host.';dbname='.$this->dbname;
				$options = array( PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

				$this->db = new PDO($str, $this->user, $this->password, $options);

				$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$this->config = $conf; 
			}
			catch(PDOException $e) {  
 			   echo " Sorry. This operation will not ";  
			    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
			}
		}

		function get_row($id){
			try{
				$str = "SELECT * FROM ".$this->config['curr_req']." WHERE id=".$id;

				foreach ($this->db->query("SELECT * FROM ".$this->config['curr_req']." WHERE id=".$id)->fetch() as $key => $value) {
					$result[$key] = $value;
				}
				return $result;
				$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		function show_table($tbl){
			try{
				$res = $this->db->query("SELECT * FROM ".$tbl);
				$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$result=$res->fetch();
				$flag=1;
				foreach ($result as $key => $value) {
				 	if($flag!=1){
				 	   print_r($key." <= key<br>");
				 	   $flag=0;

				 	}
				 	foreach ($result as $k => $val) {
				 		print_r($k."<br>");
				 	}
				} 
/*				while($row = $res->fetch()){
					print_r($row[1]);
				}*/		
			}
			catch(PDOException $e){
				echo $e->getMessage();	
			}
		}
	}


?>
