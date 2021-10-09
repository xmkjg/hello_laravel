<?php
//https://www.runoob.com/php/php-image-gd.html
header('content-type:image/png');

$w=90;
$h=30;
$img=imagecreate($w,$h);
$bgcolor=imagecolorallocate($img,255,255,255);

//画矩形
$txtcolor=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
imagerectangle($img,0,0,$w-1,$h-1,$txtcolor);

//画像素点
for($i=0;$i<100;$i++){
	$txtcolor=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
	imagesetpixel($img,rand(1,$w-2),rand(1,$h-2),$txtcolor);
	}
	
//画线条
	for($i=0;$i<4;$i++){
		$txtcolor=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
		imageline($img,rand(1,$w-2),rand(1,$h-2),rand(1,$w-2),rand(1,$h-2),$txtcolor);
	}
	
	

//画验证码
$code1=range(0,9);
$code2=range('a','z');
$code=array_merge($code1,$code2);
$len=count($code);
$stryzm='';
for($i=0;$i<4;$i++){
	$index=rand(0,$len-1);//随机选一个索引
	$yzm[$i]=$code[$index];//将选的索引一个个给$yzm【$i】,for循环
	$stryzm=$stryzm.$yzm[$i];//保留四位验证码，用于登录时用
}
for($i=0;$i<4;$i++){
	$f=ceil($w/4);//将矩形画布分为4部分，每一个显示一个验证码
	$x=$i*$f+rand(0,15);//4部分的具体范围	
	$y=rand(1,$h/2);
$txtcolor=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
imagestring($img,5,$x,$y,$yzm[$i],$txtcolor);

}

imagepng($img);
?>