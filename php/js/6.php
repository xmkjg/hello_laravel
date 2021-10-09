<?php
$sum=0;
for( $i=1;$i<=100;$i++){
	$sum=$sum+$i;
}
echo "1+2+....+100=".$sum."<br/>";
echo $i;
?>
<br/><br/>
<?php
$i=1;
$sum=0;
while($i<1){
	$sum=$sum+$i;
	$i++;
}
echo"1+2+3+...+100=".$sum."<br/>";
echo $i;
?>
<br/><br/>
<?php
$sum=0;
$i=1;
do{
	$sum=$sum+$i;
	$i++;
}while($i<1);
	echo "1+2+...+100=".$sum."<br/>";
	echo $i;
?>
<?php
for($i=1;$i<=10;$i++){
	if($i==6){
		continue;
	}
	echo $i."<br/>";
}
?>
<?php
	for($i=1;$i<=10;$i++){
	if($i==6){
		break;
	}
	echo $i."<br/>";
}