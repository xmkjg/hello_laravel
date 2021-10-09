<?php
function breck($u,$p){
	if($u=="abc"&&$p=="123"){
		echo "你好".$u;
	}else{
		echo "请输入正确密码或账号";
	}
}
$u1=$_POST["user"];
$p1=$_POST["pwd"];
if($u1==""||$p1==""){
	echo "不能为空";
}else{
	breck($u1, $p1);
}

?>