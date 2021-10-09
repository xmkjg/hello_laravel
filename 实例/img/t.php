<?php
header("Content-type:image/png");

$i=imagecreate(300, 200);
$color=imagecolorallocate($i,200,25,25);//哪个定义的颜色离定义的画布越近画布就是什么颜色
$color2=imagecolorallocate($i, 255, 255, 255);


//坐标x轴从左到右，y轴从上到下

imagesetpixel($i, 220,50, $color2);//(x1,y1)坐标
imagesetpixel($i, 220, 60, $color2);
imagesetpixel($i, 230, 50, $color2);
imagesetpixel($i, 230, 60, $color2);

imageline($i, 30, 100, 130, 100, $color2);//(x1,y1)----(x2,y2)坐标的连线
imageline($i, 30, 100, 65, 50, $color2);
imageline($i, 65,50 ,130 , 100, $color2);

//需要填充则在image后面直接加filled

imagerectangle($i, 160, 80, 220, 100, $color2);//左上角(x1,y1),右下角（x2,y2）;
imagefilledrectangle($i, 50, 20, 100, 50, $color2);

imagefilledellipse($i, 70, 80, 40, 40, $color2);//圆形填充
imagefilledellipse($i,95, 95, 40, 40, $color2);
imageellipse($i, 55, 95, 40, 40, $color2);//圆心为(x1,y1),后面两个数字为圆的宽相等为圆，不相等为椭圆

$str="furui";
imagechar($i, 10, 200, 100, $str, $color2);//首字母打印，在$i画布--大小--坐标(x1,y1)--内容---颜色
imagestring($i, 10, 200, 20, $str, $color2);//文本全部打印
imagecharup($i, 10, 200, 100, $str, $color2);//首字母竖着打印
imagestringup($i, 10, 200, 80, $str, $color2);//文本竖着打印



imagepng($i);
?>