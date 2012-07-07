<?php
 class Models{
 	public static $parts;
 	function __construct($parts){
 		self::$parts = $parts;
 	}
 	function getParts(){
 		return self::$parts;
 	}
 }
?>