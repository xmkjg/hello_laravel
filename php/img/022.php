<?php
$pizza="1001,80,3,240;1002,60,1,60;1004,100,2,200;1007,70,2,140;1008,60,1,60;1009,100,2,200";
$arr1=explode(";", $pizza);
print_r($arr1);
?>
<table border="1">
	<tr>
		<th>商品编号</th>
		<th>单价</th>
		<th>数量</th>
		<th>小计</th>
	</tr>
	<?php foreach($arr1 as $str){ ?>
		<tr>
			<?php
			$arr2=explode(",", $str);
			foreach($arr2 as $va){?>
			<td> <?php echo $va; ?></td>
			<?php } ?>
		</tr>
		
	<?php } ?>
 </table>