<?php
require_once 'ActionBase.class.php';
require_once DIR . "/model/BlogInfoModel.class.php";

class BlogInfo extends ActionBase {
    
    public function action(){
        //页面展示
        $BlogInfoModel = new BlogInfoModel();
        $result = $BlogInfoModel->getResult($this->user_info);

        $this->tpl->assign($result);
        $this->tpl->display('info.tpl');
    }
}