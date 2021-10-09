<?php
	
class phone{
	public $peace;
	public $brank;
	public $size;
	public function speak(){
		echo "这台手机品牌是".$this->brank."价值".$this->peace."元,有".$this->size."英寸";
		
	}
}
$p=new phone();
$p->peace=10000;
$p->brank='华为';
$p->size="45";
$p->speak();
	
