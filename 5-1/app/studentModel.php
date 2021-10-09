<?php

class studentModel{
	protected  $link;
	
	public function __construct(){
		$this->link=new MySQLi('127.0.0.1','root','','myframe');
		$this->link->set_charset('utf8mb4');
	}
	
	public function getAll(){
		 $sql = "SELECT * FROM 'student'";
		$res=$this->link->query($sql);
		return $res->fetch_all(MySQLI_ASSOC); //query执行mql语句
		//fetch_all 将结果全部列出
	}

}