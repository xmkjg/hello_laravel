<?php
//抽象类可以拥有非抽象方法
abstract class Sport{
	public abstract function Running();//抽象方法没有{  }
}

class Run extends Sport{
	public  function Running(){
		echo'跑步';
	}
}
$p=new Run();
$p->Running();


abstract class Spor{
	public abstract function swimming();
	public function g(){
		echo '';
	}
}
class swimm extends Spor{
	public function swimming(){
		echo '游泳';
	}
	public function g(){
		echo '不知道干嘛';
	}
}





$p=new swimm();
$p->swimming();
$p->g();
