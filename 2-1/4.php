<?php
class person{
	public $name='Admin';
	public static $age=18;
	public static function show(){
		echo '静态方法';
	}
}
$p=new person();
echo $p->name;

echo person::$age;

 person :: show();
