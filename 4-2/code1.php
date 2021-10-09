<?php
class code1{
	private $w;
	private $h;
	private $img;
    private $code;
	private $code1;
	private $code2;
	private $txtcolor;
	private $yzm;
	
	 function __construct($w,$h){
		 $this->w=$w;
		 $this->h=$h;
		 $this->imgCreate(); 
		 $this->imgtangle();
	     $this->imgpixel();
		 $this->imgline();
		 $this->imgyzm();
		  $this->imgstring();
		 $this->show();
	 }
	
	
	private function imgCreate(){
		$this->img=imagecreate($this->w,$this->h);
		imagecolorallocate($this->img,255,255,255);
		}
		
	private function imgtangle(){
		$this->txtcolor=imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
		imagerectangle($this->img,0,0,$this->w-1,$this->h-1,$this->txtcolor);
	}	
	
	private function imgpixel(){
		for($i=0;$i<100;$i++){
			$this->txtcolor=imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
			imagesetpixel($this->img,rand(1,$this->w-2),rand(1,$this->h-2),$this->txtcolor);
			}
		}	
		
	private function imgline(){
		for($i=0;$i<4;$i++){
			$this->txtcolor=imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
			imageline($this->img,rand(1,$this->w-2),rand(1,$this->h-2),rand(1,$this->w-2),rand(1,$this->h-2),$this->txtcolor);
		}
		
	}
	
	private function imgyzm(){
		$this->code1=range('0','9');
		$this->code2=range('a','z');
		$this->code=array_merge($this->code1,$this->code2);
		$len=count($this->code);
		for($i=0;$i<4;$i++){
			$index=rand(0,$len-1);//随机选一个索引
			$this->yzm[$i]=$this->code[$index];//将选的索引一个个给$yzm【$i】,for循环
			
		}
	}
	
	private function imgstring(){
		for($i=0;$i<4;$i++){
		$f=ceil($this->w/4);//将矩形画布分为4部分，每一个显示一个验证码
		$x=$i*$f+rand(0,15);//4部分的具体范围	
		$y=rand(1,$this->h/2);
	$this->txtcolor=imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
	imagestring($this->img,5,$x,$y,$this->yzm[$i],$this->txtcolor);
	
	}
	}
	
	
	 function show(){
		header('content-type:image/png');
		imagepng($this->img);
	}
}
$a=new code1(100,40);
$a->show();