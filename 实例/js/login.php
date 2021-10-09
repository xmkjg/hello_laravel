<?php
session_start();
header("Content-Type:text/html;charset=utf8");

if(!empty($_POST)){
   function  chk($u,$p){
   	if($u=="furui" && $p=="123"){
   		if($_SESSION["yzm"]==$_POST["yzm"]){
   		if($_POST["autologin"]=="yes"){
   			setcookie("atuolog",$u,time()+24*3600*7);
			
   		}
		$_SESSION["myuser"]=$u;
		header('refresh:0;url=index.php');
   	}else{
   		echo"验证码错误，请重新输入";
			header('refresh:0;url=index.php');
	}
	}
   	else{
   		echo"用户名或密码不正确,请重新输入!";
		header('refresh:3;url=index.php');
   	}
	}
	$user=$_POST["user"];
	$pwd=$_POST["pwd"];
	
	chk($user, $pwd);
   
}
?>