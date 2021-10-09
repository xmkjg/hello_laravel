<?php
class person{
	private $name;
	
	public function set_name(){
		echo $this->name;
	}
	
	 public function get_name(){
		return $this->name;
	}
}

class Worker extends person{

	private $salary;
	
	public function set_salary(){
		
		echo $this->salary;
	}
	
	public function get_salary(){
	 return $this->salary;
	}
	
	
	 public function __construct($name,$salary){
	 	$this->name=$name;
	 	$this->salary=$salary;
	 }
	 public function show(){
		 echo '你的名字是'.$this->name."，你的月薪是".$this->salary;
	 }
 }
 
$Worker=new Worker('irhgsdhighdfgi',4584);
$Worker->show();