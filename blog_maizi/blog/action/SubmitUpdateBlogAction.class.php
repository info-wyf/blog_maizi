<?php
require_once 'ActionBase.class.php';
require_once DIR . "/model/SubmitUpdateBlogModel.class.php";

class SubmitUpdateBlog extends ActionBase {
	public $need_login = 1;
    public function action(){
        //页面展示
    	$SubmitUpdateBlogModel = new SubmitUpdateBlogModel();
    	$result = $SubmitUpdateBlogModel->getResult($this->user_info);
    	$this->tpl->assign($result);
        if($this->result['code'] == 0){
            header('Location: http://'.global_localhost.'/blog_maizi/blog/?action=bloginfo&id=' .$result['params']['safe']['id']);
        }
    }
}