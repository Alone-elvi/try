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
				while($row = $res->fetch()){
					print_r($row[title]);
				}		
			}
			catch(PDOException $e){
				echo $e->getMessage();	
			}
		}
	}


?>
