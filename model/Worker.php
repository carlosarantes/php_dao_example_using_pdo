<?php 
class Worker {

	private $id;
	private $name;
	private $age;
	private $profession;
	private $years_profession;
	private $email;

	public function __construct(){  
    }
	
	public function __get($property){
		return $this->$property;
	}
	
	public function __set($property,$value){
		$this->$property = $value;
	}
	
	public function __toString() {
        return $this->name." - ".$this->age.", years ".$this->profession;	
	}	
}
?> 