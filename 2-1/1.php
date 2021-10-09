<?php
//类的继承，指的是在现有的基础上创建新的类 extends
class Animal{
	public $name;
	public $age;
	public function ,shut(){
		echo $this->name.'发出叫声';
		echo $this->age.'岁了';
	}
}
class Cat extends Animal{
	
	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
}
$cat=new Cat('小猫',2);
$cat->shut();
//如果父类没有定义age，子类有定义，要输出age：echo $cat->age;

class Dog extends Animal{
	public $age;
	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
}
$dog=new Dog('小狗',12);
$dog->shut();
