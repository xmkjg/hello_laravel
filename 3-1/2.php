<?php
interface cominterface{
	public function connect();
	public function transfer();
	public function disconnect();
}

class computer implements cominterface{
	public function connect(){
			echo '电脑开始链接...<br/>';
	}
	public function transfer(){
		echo '电脑传输数据...<br/>';
	}
	public function disconnect(){
		echo '电脑结束链接...<br/>';
	}
	
}
$n=new computer();
$n->connect();
$n->transfer();
$n->disconnect();