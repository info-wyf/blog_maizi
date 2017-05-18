<?php
/**
 * 
 * @authors wyf 
 * @date    2016-06-04 09:56:43
 */

require_once 'ActionBase.class.php';
require_once DIR . "/lib/User.class.php";
class SubmitQuit extends ActionBase {
	
    public function action(){
    	//页面展示
        User::_unsetUserInfo();
        header('Location: http://'.global_localhost.'/blog_maizi/blog/');
    }
}