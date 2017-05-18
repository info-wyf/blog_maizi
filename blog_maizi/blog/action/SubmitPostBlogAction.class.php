<?php

require_once 'ActionBase.class.php';
require_once DIR . "/model/SubmitPostBlogModel.class.php";

class SubmitPostBlog extends ActionBase {
	public $need_login = 1;
    public function action(){
    	//页面展示
    	$model = new SubmitPostBlogModel();
    	$result = $model->getResult($this->user_info);
    //调试专用    var_dump($result);die;
        //此处action的作用，是用来表示，我点击发送完帖子后，header上的哪一个小栏目高亮
    	$result['params']['safe']['action'] = 'audit';
       
        $this->tpl->assign($result);
        if($this->result['code'] == 0){
               
            header('Location: http://'.global_localhost.'/blog_maizi/blog/?action=audit');
        }
        // $this->tpl->display('post.tpl');
    }
}