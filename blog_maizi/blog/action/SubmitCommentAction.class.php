<?php
require_once 'ActionBase.class.php';
require_once DIR . "/model/SubmitCommentModel.class.php";

class SubmitComment extends ActionBase {
	public $need_login = 1;
    public function action(){
        //页面展示
    	$SubmitCommentModel = new SubmitCommentModel();
    	$result = $SubmitCommentModel->getResult($this->user_info);
    	$this->tpl->assign($result);
        if($this->result['code'] == 0){
            header('Location: http://'.global_localhost.'/blog_maizi/blog/?action=bloginfo&id=' .$result['params']['safe']['blog_id']);
        }
    }
}