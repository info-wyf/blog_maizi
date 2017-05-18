<?php
/**
 * 
 * @authors wyf
 * @date    2016-06-04 10:59:12
 */
require_once 'ModelBase.class.php';
require_once DIR . "/dao/DaoBlog.class.php";
class DeleteBlogModel extends ModelBase {
    //执行逻辑
    public  function preform(){
        $DaoBlog = new DaoBlog();
        //判断是不是自己的博客，同学自己补上
        $where = array('id = ' => $this->params['safe']['id'] );

        $ret = $DaoBlog->deleteBlog($where);
        $this->result['code'] = $ret == true ? 0 : -1;
    }

    //检测参数
    public function checkparams(){
        if(empty($this->params['safe']['id'])){
            throw new Exception("error_id", 1);
        }

     }
}