<?php
session_start();
header("Content-Type:text/html;charset=utf8");

setcookie("atuolog","",time()-1000);
unset($_SESSION["myuser"]);
if(!isset($_SESSION['myuser'])){
	header('refresh:0;url=index.php');
}
?>