<?php
date_default_timezone_set("Asia/Shanghai");
$nowtime=time();
$nb=date("Y年m月d日h时i分s秒",$nowtime);
echo $nb;
$week=date("w");
switch($week){
case"0":
	echo "星期日";
	break;
case"1":
	echo"星期一";
	break;
case"2":
	echo"星期二";
	break;
case"3":
	echo "星期三";
	break;
case"4":	
	echo "星期四";
	break;
case"5":
	echo "星期五";
	break;
case"6":
	echo "星期六";
	default:
	echo "数据错误";
}
?>
<br /><br />
<?php
$startime='21:00:00';
$endtime='22:00:00';
$startimestr=strtotime($startime);
$endtimestr=strtotime($endtime);
$total=$endtimestr-$startimestr;
$now=time();
$remain=$endtimestr-$now;
$hous=ceil($remain/60);

echo "上课时间".($total/60)."分钟";
echo "还有".$hous."分钟下课";



	?>