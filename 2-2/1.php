<?php
class person{
	public $name='Tom';
	protected $tel='22344';
	private $funds='100000';
	
	public function Getfunds(){
		echo $this->funds;
	}
	//访问不能访问的变量
	public function __get($name){
		echo $name.'='.$this->funds;//echo $name.'='.$this->tel
		}
	//访问不能或不存在类中的对象
	public function __call( $name,$args){
		echo $name, '------';
		print_r($args);//打印方法
		
	}
}
$p=new person();

echo $p->name;

$p->funds;
$p->tel;

$p->show('sex','age');