<?php
require_once 'ActionBase.class.php';
require_once DIR . "/model/JudgeBlogModel.class.php";

class JudgeBlog extends ActionBase {
    
    public function action(){
        //页面展示
        $JudgeBlogModel = new JudgeBlogModel();
        $result = $JudgeBlogModel->getResult($this->user_info);
    	if($result['code'] == 0){
            header("Location:http://".global_localhost."/blog_maizi/blog/?action=audit&page=".$result['params']['safe']['page']);	
    	}
  
    }
}