<?php
/**
 * 
 * @authors Wyf
 * @date    2016-06-07 10:36:42
 */
require_once 'ModelBase.class.php';
require_once DIR . "/dao/DaoBlog.class.php";
class SubmitPostBlogModel extends ModelBase {

    //执行逻辑
    public  function preform(){
    	$insert = array();
        $insert['title'] = $this->params['safe']['title'];
        $insert['blog'] = $this->params['safe']['editorValue'];
        $insert['blog_type'] = $this->params['safe']['blog_type'];
        $insert['show'] = $this->params['safe']['show'];
        $insert['audit'] = $this->params['safe']['audit'];
        $insert['user_id'] = $this->user_info['user_id'];
        $insert['is_deleted'] = 0;
        $insert['create_time'] = time();
        $DaoBlog = new DaoBlog();
        $DaoBlog->insertBlog($insert);
  //调试专用     var_dump($insert);die;
        $this->result['code'] = $ret == true ? 0 : -1;

    }


	//检测参数
    public function checkparams(){
        if(empty($this->params['safe']['title'])){
            throw new Exception("error_name", 1);
        }
        //此处说明了show是与is_deleted相关的参数，初始为0，显示，逻辑删除后为1，不显示
        $this->params['safe']['show'] = !empty($this->params['safe']['show']) ? $this->params['safe']['show'] : 0;
        //此处说明了audit在创建该帖子的时候赋值为1，后续增加判断条件，只有audit为0，才算审核通过
        $this->params['safe']['audit'] = !empty($this->params['safe']['audit']) ? $this->params['safe']['audit'] : 1;
     }
}