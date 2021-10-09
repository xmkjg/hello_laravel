<p style="color: blue;">数值交换</p>
<?php
$x=10;
$y=20;
if($x<$y){
	$c=$x;
	$x=$y;
	$y=$c;
}
echo "\$x=".$x."<br/>";
echo "\$y=".$y."<br/>";
?>
<p style="color: blue;">时间</p>
<?php
	$date=date("y年t月t日");
	echo "今天是$date<br/>";

	$w=date('w');
	if($w=0||$w=6){
		echo "今天是愉快的周末";
	}else{
		echo "忙碌的工作日";
	}
?>
<p style="color: blue;">成绩</p>
<?php
	$score=20;
	if($score>=90){echo "优秀";}
	else if($score>=80){echo "良好";}
	else if($score>=70){echo "一般";}
	else if($score>=60){echo "及格";}
	else{echo"不及格";}
?>

<?php
	$score=89;
	switch($score){
		case $score>=90:
		echo "你的成绩是$score，等级为优秀";
			break;
		case $score>=80:
			echo "你的成绩是$score,等级为良好";
		break;
		case $score>=70:
			echo "你的成绩为$score,等级为一般";
			break;
		case $score>=60:
			echo"等级为及格,你的成绩为$score";
			break;
		default:
			echo "成绩不及格";
	}
