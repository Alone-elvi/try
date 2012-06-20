<?php
	class MDBase{
		var $host='localhost';
		var $dbname = 'try';
		var $user = 'root';
		var $password = 'root';
		
		public function __construct(){
			try{
				$str='mysql:host='.$this->host.';dbname='.$this->dbname;
				$this->db = new PDO($str, $this->user, $this->password);
				$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
			}
			catch(PDOException $e) {  
 			   echo " Sorry. This operation will not ";  
			    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
			}
		}

		public function show_table($tbl){
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
