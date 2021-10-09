<?php
//析构方法，释放对象时自动调用
class person{
		
	function __destruct(){
		echo '正在执行析构方法.<br/>';
	}
}
$p1=new person();
unset($p1);

function test(){
	$p2=new person();
}
test();














