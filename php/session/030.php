<?php
session_start();
if(isset($_SESSION["city"])){
	$mycity=$_SESSION["city"];
	echo "你好".$mycity;
	echo '<br/><a href="031.php">退出</a>';
}else{
	echo '<a href="029.php">请登录</a>';
}
?>