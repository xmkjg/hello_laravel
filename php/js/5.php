<?php
$num=rand(1,20);
$info="";
switch($num){
	case 1:
		$info="一等奖";
		break;
	case 5:case 10:
		$info="二等奖";
		break;
	case 12:case 15: case 20:
		$info="三等奖";
		break;
		default:
			$info="没中奖";
}
echo $num;
echo $info;
?>