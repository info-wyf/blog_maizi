<?php

require_once 'ActionBase.class.php';
require_once DIR . "/model/MyBlogModel.class.php";

class MyBlog extends ActionBase {
	public $need_login = 1;
    public function action(){
        //页面展示
        $MyBlogModel = new MyBlogModel();
        $result = $MyBlogModel->getResult($this->user_info);
        $this->tpl->assign($result);
        $this->tpl->display('myblog.tpl');
    }
}