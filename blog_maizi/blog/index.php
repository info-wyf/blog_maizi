<?php
//找到当前文件的路径
header('content-type:text/html;charset=utf-8');
define("DIR",__DIR__);
run();
function run(){
	$action = $_GET['action'];
	$action = empty($action)? "index" : $action;
	$action_file = DIR .'/action/'. ucfirst($action) ."Action.class.php";
	if(!file_exists($action_file)){
		echo "action error";die;
	}
	require_once $action_file;
	$action_class = new $action;
	$action_class->action();
}

