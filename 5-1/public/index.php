<?php
define ('VIEWS_PATH','../views/');
define('APP_PATH','../app/');

require APP_PATH.'studentcontroller.php';
$c=new studentcontroller();
$c->index();
