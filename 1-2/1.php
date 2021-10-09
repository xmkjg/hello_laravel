<?php
class person{
	public $name;
	public function __construct($name='Admin'){
		$this->name=$name;
		
	}
	function show (){
		echo $this ->name.'正在执行构造方法';
	}
}
$p1=new person('俊华');
$p1->show();
$p2=new person();
$p2->show();






