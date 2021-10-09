<?php
date_default_timezone_set('Asia/ShangHai');
$today=date('m-d',time());
$brithday="03-23";
$money=235;
if($today==$brithday){
	$discount=0.3;
}else{
	$discount=0.9;
}
$money=$money*$discount;
echo $money;
?>