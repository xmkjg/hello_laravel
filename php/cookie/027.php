<?php
date_default_timezone_set("PRC");
$mytime=date("Y-m-d  H:i:s");
setcookie("vtime",$mytime,time(3)+2*60*60*24);
if(isset($COOKIE["vtime"])){
	echo "你上次登录的时间是".$_COOKIE["vtime"];
	echo '<a href="028.php">退出</a>';
}else
	echo'<a href="027.php">请重新登录</a>';

	

?>