<?php
define("PI",3.14);
echo PI;
$p=PI;
echo "<br/>";
echo $p;
$r=3;
echo"<br/>";
echo "面积为:".(PI*$r*$r)."<br/>";
echo "周长位".($p*2*$r);
?>
<br/><br/>
<p style="color: blue">约定熟成：常量用大写字母，变量用小写字母，但不是硬性规定</p>
<?php
echo"<br/>";
echo __FILE__;
echo __LINE__;
echo PHP_VERSION;
echo"<br/>";
echo PHP_OS;
?>
<br/><br/>
<?php
define("GREETING", "欢迎访问");
function  mytest(){
	echo GREETING;
	}
myTest();
?>

