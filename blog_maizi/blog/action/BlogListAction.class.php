<?php

require_once 'ActionBase.class.php';
require_once DIR . "/model/BlogListModel.class.php";

class BlogList extends ActionBase {
	
    public function action(){
        //页面展示
        $BlogListModel = new BlogListModel();
        $result = $BlogListModel->getResult();
        $this->tpl->assign($result);
        $this->tpl->display('blogList.tpl');
    }
}