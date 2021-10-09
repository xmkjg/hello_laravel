<?php
function land($a,$b){
	for($i=$a;$i<$b;$i++){
		if($i%3==1&&$i%4==2&&$i%5==3){
			echo $i."<br/>";
		}
	}
}
land(300, 500);
?>