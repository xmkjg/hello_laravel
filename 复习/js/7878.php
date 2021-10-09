<?php
$str="152462200105120246男张小宇";
echo substr($str,6,6)."<br>";
echo substr($str,18,3)."<br>";
echo substr($str,21)."<br>";
echo str_ireplace("张小宇", "李大龙", $str)."<br>";
?>
<br/>
<?php
	for($i=100;$i<150;$i++){
	if(($i%3==1)&&($i%4==2)&&($i%5==3)){
		echo"人数是:".$i."人";
	}
	}
	?>
	<br />
	<?php
		$conn=mysqli_connect("10.1.67.249","root","","xxgc");
		$sql="select *from users limit 5";
		$que=mysqli_query($conn,$sql);
		$arr=mysqli_fetch_all($que,MYSQLI_ASSOC);
		echo"<pre>";
		print_r($arr);
		?>
		<br />
		<?php
		$a=range("A","Z");
		$b=range("a","z");
		$c=range("0","9");
		$d=array_merge($a,$b,$c);
		echo"<pre>";
		for($k=0;$k<4;$k++){
	 echo $d[rand(0,61)];
	    }
         ?>  