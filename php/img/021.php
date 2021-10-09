<?php
$arr=range("A", "Z");
$arr2=range("a", "z");
$arr3=range("0", "9");
$arr4=array_merge($arr,$arr2,$arr3);
for($j=0;$j<4;$j++){
	$i=rand(0,61);
	echo $arr4[$i];	
}
?>
<br /><br />
<?php
$a=array("peter","ben","joe");
$b=array("35","36","37");
$c=array_combine($a, $b);
print_r($c);
	?>
	<br /><br />
	<?php
	$a1=array_fill(3, 2, "老师");
	$a2=array_fill(0, 14,"学生");
	$arr=array_merge($a1,$a2);
	print_r($arr);
	echo "<pre>";
		?>
		<?php
		$a=array("老师1，老师2");
		$b=array_pad($a,18,"学生");
		print_r($b);
			?>