<?php
$arr2=array(
array("id"=>101,"title"=>"2010新生军训精彩表演","date"=>"2020-10-25","aut"=>"张三"),
array("id"=>102,"title"=>"2020新生专业教育","date"=>"2020-10-26","aut"=>"李四"),
array("id"=>103,"title"=>"2018级学生跟岗实习","date"=>"2020-10-26","aut"=>"张三")
);
echo "<pre>";
print_r($arr2);
?>
<table border="1">
	<tr>
		<th>新闻标题</th>
		<th>发表日期</th>
		<th>作者</th>
	</tr>
	<?php
	foreach($arr2 as $arr){
		print_r($arr);
	?>
	<tr>
	<td><?php echo $arr["title"]; ?></td>
	<td><?php echo $arr["date"]; ?></td>
	<td><?php echo $arr["aut"]; ?></td>
    </tr>
<?php
	}
	?>
</table>