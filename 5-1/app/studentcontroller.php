<?php
class studentcontroller{
	public function index(){
		require APP_PATH.'studentModel.php';
		$model=new studentModel();
		$data=$model->getAll();
		
		require VIEW_PATH."student.php";//require 引入文件  引入视图文件
	}
}