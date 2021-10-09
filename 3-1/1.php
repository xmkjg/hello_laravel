<?php
//interface 关键字
//implements关键字

interface ComInterface{   //接口里面默认都是抽象类，即使没有abstract
	public function connect();
	public function transfer();
	public function dosconnect();
}

class MobilePhone implements ComInterface{
	public function connect(){
		echo '手机开始链接...<br/>';
	}
	public function transfer(){
		echo '手机传输数据...<br/>';
	}
	public function dosconnect(){
		echo '手机结束链接...<br/>';
	}
}
$m=new MobilePhone();
$m->connect();
$m->transfer();
$m->dosconnect();

