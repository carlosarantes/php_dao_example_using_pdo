<?php 
	require_once('DBConnector.php');
	require_once('WorkerDAO.php');
	
	class DAOFactory{
		
		private $connection;	
		
		public function __construct(){
		}
		
		public function openConnection(){
			$this->connection = DBConnector::getConnection();
		}
		
		public function createWorkerDAO(){
				$workerDAO = new WorkerDAO($this->connection);
				return $workerDAO;
		}
	
		public function closeConnection(){
			$this->connection = null;
		}
	}


?>   