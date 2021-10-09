<?php
session_start();
header("Content-Type:text/html;charset=utf8");

echo"这是主页";

if(isset($_COOKIE["atuolog"])){
//	if(isset($_POST["user"])){
//		$_SESSION["myuser"]==$_COOKIE["atuolog"];
//	}
	$myuser=$_COOKIE["atuolog"];
	echo "你好".$myuser;
	echo'<a href="loginout.php">注销</a>';
}else{
	echo'<a href="login.html">请登录</a>';
}


?>