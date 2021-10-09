<?php
$servername='127.0.0.1';
$username='root';
$password='';
$dbname='xxgc';
$conn=new mysqli($servername,$username,$password,$dbname );
$conn->query('set names utf8');

$sql="select * from tb_news";
$stm=$conn->query($sql);
echo $datanum=$stm->num_rows;

// while($info=$stm->fetch_assoc()){
// 	echo $info['news_title']."<br/>";
// }

$page_size=5;

$page_num=ceil($datanum/$page_size);

if(isset($_GET['page_id'])){
	$page_id=$_GET['page_id'];
}else{
	$page_id=1;
}

$start=($page_id-1)*$page_size;
$nowSql="select * from tb_news limit ".$start.",".$page_size;
$result=$conn->query($nowSql);
// echo $datanum=$stm->num_rows;

while($info=$result->fetch_assoc()){
	echo $info['news_title']."<br/>";
}

$str="第".$page_id."页共".$page_num."页";
if($page_id==1){
	$str .="首页|上一页";
}else{
	$str .="<a href=?page_id=1>首页</a>|<a href=?page_id=".($page_id-1).">上一页</a>";
}
for($i=1;$i<=$page_num;$i++){
	$str .= "<a href=?page_id=".$i.">[".$i."]</a>";
}

if($page_id==$page_num){
	$str .="首页|下一页";
}else{
	$str .="<a href=?page_id=".$page_num.">尾页</a>|<a href=?page_id=".($page_id+1).">下一页</a>";
}

echo $str;
?>