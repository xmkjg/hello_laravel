<br >
<?php
for($i=1;$i<=100;$i++){
	if($i%3==0){
		echo"<pre>";
		echo $i."";
	}
}
?>
<br>
<?php
$no=23;
$maxline=5;
$line=ceil($no/$maxline);	
$row=$no%$maxline ? $no%$maxline:$maxline;
echo"编号<b>".$no."</b>的座位在<b>".$line."</b>排第<b>".$row."个座位";
		?>
		<br >
		<?php
			$arr=array("id"=>"201901","name"=>"张明","address"=>"北京");
			echo $arr["id"];
			echo "<br>";
				foreach($arr as $a=>$b){
					echo $a."=>".$b."<br>";
				}
		        ?>
<table width="300" border="1" bgcolor="#0000ff" >
	<tr>
		<td bgcolor="#ffffff"><div align="center"><?php echo $arr["id"]?></div></td>
		<td bgcolor="#ffffff"><div align="center"><?php echo $arr["name"]?></div></td>
		<td bgcolor="#ffffff"><div align="center"><?php echo $arr["address"]?></div></td>
	</tr>
</table>		        
<br>
	<?php
		date_default_timezone_set("PRC");
	     $birt=mktime(12,03,25,1,23,2002);
	     $bir_sec=time()-$birt;
	     $a=ceil($bir_sec/60);
	     echo"你来到这个世界".$a."分钟";
	     echo "<br>";
	    $b=mktime(12,03,25,1,23,2022);
		$c=$b-time();
		$d=ceil($c/60/60/24);
		echo "还有".$d."生日";
		?>