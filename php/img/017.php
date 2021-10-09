<?php
date_default_timezone_set("Asia/Shanghai");
$nowtime=time();
$mybirtime=mktime(0,0,0,10,1,2002);
$nd=date("Y年m月d日",$mybirtime);
echo "我出生日期是:".$nd."<br/>";
$time=$nowtime-$mybirtime;
echo "我活了:".$time."秒"."<br/>";
$day=$time/(3600*24);
echo "我存在".ceil($day)."天"."<br/>";
$year=$time/(3600*24*365);
echo "我存在".ceil($year)."年";
?>
<br /><br />
<?php
	$mybirtime_next=mktime(0,0,0,10,1,2021);
	$nd=($mybirtime_next-$nowtime)/(24*3600);
	echo "离我生日还有".ceil($nd)."天";
	?>