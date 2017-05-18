<?php
require_once 'ActionBase.class.php';
require_once DIR . "/model/DeleteBlogModel.class.php";

class DeleteBlog extends ActionBase {
    
    public function action(){
        //页面展示
        $DeleteBlogModel = new DeleteBlogModel();
        $result = $DeleteBlogModel->getResult($this->user_info);
    	if($result['code'] == 0){
    		header("Location:http://".global_localhost."/blog_maizi/blog/?action=myblog&page=".$result['params']['safe']['page']);
    	}
  
    }
}