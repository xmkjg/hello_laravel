<?php
$arr=array("id"=>"200210","name"=>"付瑞","address"=>"广州","e-meil"=>"1991442704@qq.com");
print_r($arr);
echo "<br/>";
echo "<br/>";
//增
$arr["school"]="广州南洋理工职业学院";
print_r($arr);


$arr["fimail"]="时代城";
print_r($arr);

echo "<br/>";
echo "<br/>";
//删
unset($arr["address"]);
print_r($arr);
echo "<br/>";
echo "<br/>";
//改
$arr["school"]="华南师范大学";
print_r($arr);
$arr["fimail"]="时代城三期";
print_r($arr);
echo "<br/>";
echo "<br/>";

//查
echo $arr["school"];

//数组指针，指哪输出哪
$va=current($arr);
echo "<br/>";
echo $va;
echo "<br/>";
echo end($arr);
echo "<br/>";
echo next($arr);


$data=array(
array('name'=>'tom','gender'=>'男'),
array('name'=>'Luec','gender'=>'女'),
array('name'=>'Jimmer','gender'=>'男')
);
print_r($data);

?>