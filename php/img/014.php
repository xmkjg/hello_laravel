<?php
function fire($a,$b){
	if($a=="你好呀！"&&$b=="tom"){
		echo $a."<br/>";
		echo $b;
		
	}else{
		echo "请输入真正的";
	}
}
$a1=$_POST["use"];
$b1=$_POST["pwde"];
if($a1==""||$b1==""){
	echo "不能为空";
}else{
	fire($a1, $b1);
}

?>