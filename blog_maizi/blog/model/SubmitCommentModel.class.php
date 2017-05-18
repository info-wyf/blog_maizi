<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-04-02 22:40:31
 */
require_once 'ModelBase.class.php';

require_once DIR . "/dao/DaoComment.class.php";

class SubmitCommentModel extends ModelBase {
    
    //执行逻辑
    public  function preform(){
        $DaoComment = new DaoComment();
        $insert['user_id'] = $this->user_info['user_id']; 
        $insert['blog_id'] = $this->params['safe']['blog_id'];
        $insert['comment'] = $this->params['safe']['comment'];
        $insert['create_time'] = time();
        
        $ret = $DaoComment->addCommnet($insert);
        $this->result['code'] = $ret == true ? 0 : -1;
    }


	//检测参数
    public function checkparams(){
    	if(empty($this->params['safe']['comment'])){
    		throw new Exception("error_name", 1);
    	}
    }
}