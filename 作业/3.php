<?php
abstract class Area{
	public function rearea(){
		echo "矩形面积是";
	}
	public function ovalarea(){
		echo '椭圆形面积是';
	}
}
class Areas extends Area{
	private $a;
	private $b;
	
	public function __construct($a,$b){
		$this->a=$a;
		$this->b=$b;
	}
	
	public function rearea(){
	echo '矩形面积是'.$this->a*$this->b;	
	
	}
}

class Areass extends Area{
	private $c;
	private $d;
	private $e=3.14;
	
    public function __construct($c,$d){
		$this->c=$c;
		$this->d=$d;		
	}
	
	public function ovalarea(){
		echo '椭圆形面积是'.$this->c*$this->d*$this->e;
	}
}

$p=new Areas(10,10);
$p->rearea();

$t=new Areass(20,20);
$t->ovalarea();
