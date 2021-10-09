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

imagepng($img);
?>