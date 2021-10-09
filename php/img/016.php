<?php
$str1="你好";
$str2="明日科技";
$str="你好公司是一家以编程词典为核心技术的科技公司";
echo str_ireplace($str1, $str2, $str);//将$str内$str1全部替换成$str2，忽略大小写
?>
<br /><br />
<?php
$c="吉林省明日科技有限公司，是一家知名软件公司";
$str="明日科技";
echo str_replace($str, "<font color='<#ff0000'>".$str."</font>",$c);
?>//将$str内$str1全部替换成$str2，不忽略大小写
<br /><br />
<?php
echo str_ireplace("WORD","Peter","Hello word!Hello word!Hello word!Hello word!",$i);
echo "<br/>";
echo "替换的次数是".$i;
?>
<br /><br />
<?php
$str="用今日的辛勤工作，换明日的双倍回报";
$replace="百倍";
echo substr_replace($str, $replace,0);
echo "<br/>";
echo substr_replace($str, $replace,9);
echo "<br/>";
echo substr_replace($str, $replace,9,9);
echo "<br/>";
echo substr_replace($str, $replace,36,9);
?>
<br /><br />
<?php
$pizza="1001,80,3,240;1002,60;1004,100,2,200;1007,70,2,140;1008,6";
$arr=explode(";",$pizza);
echo "<pre>";
print_r($arr);
$str=implode("#", $arr);
echo $str;

?>
<br /><br />
<?php
$number=21223665.2264354;
echo number_format($number,2);
echo "<br/>";
$number2=123456789.1443423;
echo number_format($number2,2,'/','#');
//重点看小数点后第三位是否大于五，四舍五入；
?>
	