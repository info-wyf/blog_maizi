<?php

/**
 * 
 * @authors wyf 
 * @date    2016-06-04 07:40:15
 * 注意所有的result都是传给tpl的
 */
require_once 'ModelBase.class.php';
require_once DIR . "/dao/DaoBlog.class.php";
require_once DIR . "/dao/DaoUser.class.php";
require_once DIR . "/dao/DaoComment.class.php";
require_once DIR . "/lib/Tools.class.php";

class IndexModel extends ModelBase {

    public $blog_type = array(
        1 => "历史迷雾",
        2 => '个人心路',
        3 => '技术控',
        4 => '学习心得'
    );

    //执行逻辑
    public function preform() {
        $DaoBlog = new DaoBlog();
        $list = $DaoBlog->getBlogList();
        //此处的limit修改每页显示多少条帖子数
        $pageInfo = Tools::_pageInfo($this->params['safe']['page'], count($list), $limit = 6);

        if (is_array($list)) {
            $list = array_slice($list, $pageInfo['start'], $pageInfo['limit']);
        }

        //此处为右侧名人推荐的信息
        $DaoUser = new DaoUser();
        $hot_user = $DaoUser->getUser();
        $this->result['hot_user'] = $hot_user;

        //此处为帖子列表
        $list = Tools::formartBlogList($list);

        $this->result['data']['list'] = $list;
        $this->result['pageInfo'] = $pageInfo;
    }

    //检测参数
    public function checkparams() {
        $this->params['safe']['page'] = empty($this->params['safe']['page']) ? 1 : $this->params['safe']['page'];
    }

}
