 <?php 
	require_once('../dao/DAOFactory.php');
	require_once('../dao/WorkerDAO.php');
	require_once('../model/Worker.php');
	
	//----------------------------------
	if(isset($_POST['confirm'])){
		
		$worker = new Worker();
		
		$worker->name = $_POST['name'];
		$worker->age  = $_POST['age'];
		$worker->profession = $_POST['profession'];
		$worker->years_profession = $_POST['years_profession'];
		$worker->email = $_POST['email'];
		
		$dao = new DAOFactory();
		$dao->openConnection();
		$workerDAO = $dao->createWorkerDAO();
		$workerDAO->insert($worker);
		$dao->closeConnection();
		
		echo "<script language=javascript>window.location.href = '../views/newworker.html'</script>";
	}
 
 ?>   