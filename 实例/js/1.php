<?php
session_start();
header("Content-type:image/jpeg");
$w=120;
$h=50;
$im=imagecreatetruecolor($w, $h);
$color=imagecolorallocate($im, 240, 240, 240);
imagefill($im, 0, 0, $color);

for($i=0;$i<100;$i++){
	$pixel=imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));
	imagesetpixel($im, rand(0,120), rand(0,50), $pixel);
}

for($i=0;$i<4;$i++){
	$line=imagecolorallocate($im,  rand(0,255),  rand(0,255),  rand(0,255));
	imageline($im, rand(0,120), rand(0,50), rand(0,120), rand(0, 50), $line);
     }

$code="";
$number=range("A","Z");
$number2=range("a", "z");
$number3=range(0, 9);
$arr=array_merge($number,$number2,$number3);

for($j=0;$j<4;$j++){
	$i=rand(0, 61);
	$code=$code.$arr[$i];
	$yzm[$j]=$arr[$i];
}
 $_SESSION["yzm"]=$code;
 $char=imagecolorallocate($im, 0, 0,0);
 
 for($i=0;$i<4;$i++){
 	$c=$yzm[$i];
	 $x=$i*22+rand(0,18);
	 $y=rand(0, 25);
	imagechar($im, 5, $x, $y, $c, $char);
 }


imagejpeg($im);

?>