<?php
	class model_MDBase{
		static $host='localhost';
		static $dbname = 'try';
		static $user = 'root';
		static $password = 'root';

		static function get_db(){
			try{
				$str='mysql:host='.self::$host.';dbname='.self::$dbname;
				$options = array( PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

				$db = new PDO($str, self::$user, self::$password, $options);

				$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				return $db;
			}
			catch(PDOException $e) {  
 			   echo " Sorry. This operation will not ";  
			    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
			}
		}

		static function add($req){

		}

		static function delete(){

		}

		static function insert(){

		}
	}
?>
