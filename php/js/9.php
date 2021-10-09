<?php
define("PI", 3.14);
function circle($r1){
	$ss=$r1*$r1*PI;
	$cc=$r1*2*PI;
	echo "面积是=".$ss."<br/>";
	echo "周长是=".$cc."<br/>";
}
circle(10);
?>
<?php
	function welecome($a,$b){
		echo "欢迎".$a."来到".$b."<br/>";
		
	}
	welecome("小王", "软件五班");
	?>