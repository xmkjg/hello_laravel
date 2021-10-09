<?php
if(isset($_COOKIE["city"])){
	$mycity=$_COOKIE["city"];
	echo "你好".$mycity;
	echo'<br/><a href="026.php">退出</a>';
}
else{
	echo  '<a href="026.php">请登录</a>';
}
?>
