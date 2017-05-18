<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-04-02 22:40:31
 */
require_once 'ModelBase.class.php';
require_once DIR ."/dao/DaoBlog.class.php";
class PostBlogModel extends ModelBase {
    public $blog_type = array(
    	1=>"历史迷雾",
    	2=>'个人心路',
    	3=>'技术控',
    	4=>'学习心得'
    	);
    //执行逻辑
    public  function preform(){
         $this->result['data']['blog_type'] = $this->blog_type;
    }


	//检测参数
    public function checkparams(){

    }
}