<?php
$mex="511124200210012119男付瑞";
$years=substr($mex,6,6);
$year=substr($mex,6,4);
$id=substr($mex,18,3);
$name=substr($mex,21,9);
$a=2021-$year;
echo "出生年月:".$years."<br/>";
echo "年龄为: "."<br/>";
echo "性别为:".$id."<br/>";
echo "姓名为；".$name."<br/>";
?>
<?php
	$str="明日科技有限公司是一家知名企业的软件公司，公司主要运营范围是图书开发词典";
	if(strlen($str)>=60){
		$a=substr($str,0,24);
		echo "公司叫·".$a;
	}
	?>