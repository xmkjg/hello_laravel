<?php
	
class student{
	public $gardes;
	public function __construct($gardes){
		$this->gardes=$gardes;
	}
	public function show(){
		
		if($this->gardes>=90){
			echo "成绩优秀";
			
		}elseif($this->gardes>=80){
			echo "成绩良";
			
		}elseif($this->gardes>=60){
			echo "成绩中";
			
		}
		
		else{
				echo"成绩不及格";
		}
}
}
$p=new student(86);
$p->show();



