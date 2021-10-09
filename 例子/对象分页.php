<?php
 class page{
	 private   $servername;
	 private   $username;
	 private   $password;
	 private   $dbname;
     
	 private $conn;
	 private   $page_size;
	 private   $page_num;
	 private   $page_id;
	 
	 function __construct($page_size){
		
		$this->page_size=$page_size;
		$this->lin();
		$this->pag();
	}
	function lin(){
		$this->servername="127.0.0.1";
		$this->username="root";
		$this->password="";
		$this->dbname="xxgc";
		$this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
		$this->conn->query("set names utf8");
	}
	
     function pag(){
		 $sql="select * from tb_news";
		 $stm=$this->conn->query($sql);
		 echo $datanum=$stm->num_rows;
	     
		 $this->page_num=ceil($datanum/$this->page_size);
		 
		 if(isset($_GET['page_id'])){
		 	$this->page_id=$_GET['page_id'];
		 }else{
		 	$this->page_id=1;
		 }
		 
		 $start=($this->page_id-1)*$this->page_size;
		 $nowSql="select * from tb_news limit ".$start.",".$this->page_size;
		 $result=$this->conn->query($nowSql);
		 // echo $datanum=$stm->num_rows;
		 
		 while($info=$result->fetch_assoc()){
		 	echo $info['news_title']."<br/>";
		 }
		 
		  $str='第'.$this->page_id."页共".$this->page_num."页";
			 
			 if($this->page_id==1){
			 	$str .="首页|上一页";
			 }else{
			 	$str .="<a href=?page_id=1>首页</a>|<a href=?page_id=".($this->page_id-1).">上一页</a>";
			 }
			 
			 for($i=1;$i<=$this->page_num;$i++){
			 	$str .= "<a href=?page_id=".$i.">[".$i."]</a>";
			 }
			 
			 if($this->page_id==$this->page_num){
			 	$str .="首页|下一页";
			 }else{
			 	$str .="<a href=?page_id=".$this->page_num.">尾页</a>|<a href=?page_id=".($this->page_id+1).">下一页</a>";
			 }
			 
			 echo $str;
			  }
	} 
		 
		 $s=new  page(5);

 