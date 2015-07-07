<?php
	require_once '../model/Worker.php';
	
	class WorkerDAO{
	
		private $connection;
		private $tabela = "worker";
		
		public function __construct($connection){
			$this->connection = $connection;
		}
		
		public function insert($worker){
			$com = $this->connection->prepare("
				INSERT INTO ".$this->tabela." (name,age,profession,years_profession,email) values(?,?,?,?,?);
			");

			$com->bindValue(1,$worker->name);
			$com->bindValue(2,$worker->age);
			$com->bindValue(3,$worker->profession);
			$com->bindValue(4,$worker->years_profession);
			$com->bindValue(5,$worker->email);
			try{
			    $com->execute();
			}catch(Exception $e){
			    die("An error occurred: Error: ".$e->getMessage());
				return $com->errorCode();
			}
		}
	}	
?>