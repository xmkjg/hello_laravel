<?php
class Animal{
	public function introduce(){
		echo __CLASS__;//魔术常亮 输出当前类名
	}
	// public  final function introduce(){
	// 	echo __CLASS__;//final使方法不能被重写 类不能继承    final class  Animal{
		// }
	
	}
}
class  Cat extends Animal{
		
	public function introduce(){
		echo __CLASS__;
	}
}
$cat=new Cat();
$cat->introduce();