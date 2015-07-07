<?php
	 class DBConnector extends PDO{
		 
		 private static $database = "db"; //Here we have the database to be connected to
		 private static $server = "127.0.0.1";    //Here we have the database server address
		  //Here we have the username and password to authentify 
		  //and conclude the connection with the database above
		 private static $user = "root";          
		 private static $password = "";
		 //Here we have the attribute which gets the connected to be returned
		 private static $connection;
		 
		 //In the constructor we must only pass the database server address and
		 //the username and password
		 public function DBConnector($server,$user,$password){
		     parent::__construct($server,$user,$password);
		 }
		 
		 //Static function to validate and return the connection
		 public static function getConnection(){
		    if(!isset(self::$connection)){
		      try{
				self::$connection = new DBConnector(
				"mysql:dbname=".self::$database.";".self::$server,self::$user,self::$password);
				}catch(Exception $e){
				   die("Erro ao conectar com a base de dados.".$e->getMessage());
				}
			}
			return self::$connection;
		 }
	 }
?>