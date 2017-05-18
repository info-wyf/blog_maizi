<?php

/**
 * 
 * @authors wyf
 * @date    2016-06-04 11:07:42
 */
require_once 'ModelBase.class.php';
require_once DIR . "/dao/DaoBlog.class.php";

class UpdateBlogModel extends ModelBase {

    public $blog_type = array(
        1 => "历史迷雾",
        2 => '个人心路',
        3 => '技术控',
        4 => '学习心得'
    );

    //执行逻辑
    public function preform() {
        $DaoBlog = new DaoBlog();
        $ret = $DaoBlog->getBlogByID($this->params['safe']['id']);
        $blogInfo = $ret['0'];
        $blogInfo = $this->formartBlog($blogInfo);


        if ($blogInfo['user_id'] != $this->user_info['user_id']) {
            throw new Exception("blogInfo error", 1);
        }


        if (!empty($blogInfo)) {
            $this->result['data']['blogInfo'] = $blogInfo;
            $this->result['data']['self'] = $blogInfo['user_id'] == $this->user_info['user_id'] ? 1 : 0;
            $this->result['data']['blog_type_list'] = $this->blog_type;
            
        } else {
            throw new Exception("blogInfo error", 1);
        }
    }

    //检测参数
    public function checkparams() {
        if (empty($this->params['safe']['id'])) {
            throw new Exception("error_id", 1);
        }
    }

    private function formartBlog($blogInfo) {
        if (empty($blogInfo))
            return false;
        $blogInfo['create_time'] = date('Y-m-d H:i:s', $blogInfo['create_time']);
        return $blogInfo;
    }

}
