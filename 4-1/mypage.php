<?php
$servername='127.0.0.1';
$username='root';
$password='';
$dbname='xxgc';
$conn=new mysqli($servername,$username,$password,$dbname );
$conn->query('set names utf8');

//分页
$sql="select * from tb_news";
$stm=$conn->query($sql);
echo $datanum=$stm->num_rows;

//显示所有数据
while($info=$stm->fetch_assoc()){
	echo $info['news_title'].'<br/>';
}

//每页有多少条数据(自行决定)
$page_size=5;


//确认有多少条(总条数/单页条数)
$page_num=ceil($datanum/$page_size);

//当前页及当前页数据显示
$nowsql="select * from tb_news limit 5";
$restm=$conn->query($nowsql);
while($info=$restm->fetch_assoc()){
	echo $info['news_title'].'<br/>';
}

//分页按钮链接
for($i=1;$i<=$page_num;$i++){
	echo "<a href=?page_id=".$i.">[".$i."]</a>";
}
?>
