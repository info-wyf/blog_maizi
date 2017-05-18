<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-04-02 22:40:31
 */
require_once 'ModelBase.class.php';
require_once DIR ."/dao/DaoBlog.class.php";
require_once DIR . "/lib/Tools.class.php";
require_once DIR ."/dao/DaoComment.class.php";
class BlogListModel extends ModelBase {
    public $blog_type = array(
        1=>"历史迷雾",
        2=>'个人心路',
        3=>'技术控',
        4=>'学习心得'
    );
    //执行逻辑
    public  function preform(){
        $DaoBlog = new DaoBlog();
        //此处为普通的bloglist，选取audit审核结果为0的帖子
        $blog_list = $DaoBlog->getUserBlogListByUserId($this->params['safe']['user_id']);

        $pageInfo = Tools::_pageInfo($this->params['safe']['page'],count($blog_list),$limit=10);

        if(is_array($blog_list)){
            $blog_list = array_slice($blog_list, $pageInfo['start'],$pageInfo['limit']);
        }
        $blog_list = Tools::formartBlogList($blog_list);
        
        $this->result['pageInfo'] = $pageInfo;
        $this->result['data']['bloglist'] = $blog_list;
    }

	//检测参数
    public function checkparams(){
        $this->params['safe']['page'] = empty($this->params['safe']['page']) ? 1 : $this->params['safe']['page'];
        if(empty($this->params['safe']['user_id'])){
            throw new Exception("user_id is null ", 1);
        }
    }
}