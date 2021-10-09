<!--<?php
header("Content-Type:text/html;charset=utf8");

$db=new mysqli("127.0.0.1","root","","xxgc");
$selsql="SELECT * FROM users limit 5";
$stm=$db->query($selsql);
$stm=mysqli_fetch_all($stm,MYSQLI_ASSOC);
echo "<pre>";
	print_r($stm);
?>
<table border="1" cellspacing="" cellpadding="">
	<tr><th>ID</th><th>NAME</th><th>SEX</th><th>TELPHONE</th></tr>
	<?php
		foreach($stm as $abc){
			?>
			<tr>
				<td><?php echo $abc["id"];?></td>
				<td><?php echo $abc["name"];?></td>
				<td><?php echo $abc["sex"];?></td>
				<td><?php echo $abc["telphone"];?></td>
			</tr>
			<?php
		}
		?>
</table>-->


<?php
echo "一等奖人数是:".(100*0.15)."<br>";
echo "二等奖人数是:".(100*0.2)."<br>";
echo "三等奖人数是:".(100*0.25)."<br>";
	
	$score=36;
	if($score <=15){
		$grade="一等奖";
	}else if($score <=35){
		$grade="二等奖";
	}else if($score <=60){
		$grade="三等奖";
	}else{
		$grade="没获奖";
	}
	echo "你获奖等级是".$grade;
?>
<br />
<?php
	$score=36;
	switch($score){
		case $score <=15;
			echo "你获奖等级是一等奖";
			break;
		case $score <=35;
			echo "你获奖等级是二等奖";
			break;
		case $score <=60;
			echo "你获奖等级是三等奖";
			break;
			default:
			echo "你没有获奖";
	}
	?>