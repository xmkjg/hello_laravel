<?php
define("PI", 3.14);
function yuans($myr){
	$mys=$myr*$myr*PI;
	return $mys;
}
$s1=yuans(10);
echo "半径为10的圆面积为:".$s1."<br/>";
for($r=1;$r<=10;$r++){
	$s=yuans($r);
	echo '$r'.$r."的圆面积为：".$s."<br/>";
}
echo "<br/>--------<br/>";
?>