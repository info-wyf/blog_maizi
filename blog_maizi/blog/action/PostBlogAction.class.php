<?php

require_once 'ActionBase.class.php';
require_once DIR . "/model/PostBlogModel.class.php";

class PostBlog extends ActionBase {
	public $need_login = 1;
    public function action(){
        //页面展示
    	$PostBlogModel = new PostBlogModel();
    	$result = $PostBlogModel->getResult();
    	$result['params']['safe']['action'] = 'myblog';
    	
    	$this->tpl->assign($result);
        $this->tpl->display('post.tpl');
    }
}