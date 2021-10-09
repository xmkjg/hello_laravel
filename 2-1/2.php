<?php
class person{
	//类的封装
	public $name="Tom";
	private $funds='100000';
	protected $te1='123456';
	
	public function GetFunds(){//创建一个公有方法；来访问私有成员
		echo $this->funds;
	}
}
$p=new person();
echo $p->name;
$p->GetFunds();




