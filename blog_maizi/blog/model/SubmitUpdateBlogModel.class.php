<?php

/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-04-03 20:56:59
 */
require_once 'ModelBase.class.php';
require_once DIR . "/dao/DaoBlog.class.php";

class SubmitUpdateBlogModel extends ModelBase {

    public $blog_type = array(
        1 => "历史迷雾",
        2 => '个人心路',
        3 => '技术控',
        4 => '学习心得'
    );

    //执行逻辑
    public function preform() {
        $blogData = $this->params['safe'];     
        $blogData['blog'] = $blogData['editorValue'];
        /*
         * 在做完了审核机制之后，突然发现不能编辑帖子了，到底是什么原因呢？
         * 因为我更新帖子的原理，是点击“编辑”，进入到操作页面，更改内容后提交，当到了这个文件的时候，
         * 这里需要传过去更改的blog的字段有三个：“title”、“blog_type”、“blog”，这里总是更新失败，
         * 是因为通过调试，发现$blogData这个数组里包含了一个叫做“PHPSESSID”的东西，将之unset掉，就能够正常编辑了
         */
        unset($blogData['PHPSESSID']);
        unset($blogData['action']);
        unset($blogData['editorValue']);
        unset($blogData['id']);
        $DaoBlog = new DaoBlog();
     //       var_dump($blogData);die;
        $ret = $DaoBlog->updateBlog($blogData, array('id = ' => $this->params['safe']['id']));
        $this->result['code'] = $ret == true ? 0 : -1;
    }

    //检测参数
    public function checkparams() {
        if (empty($this->params['safe']['id'])) {
            throw new Exception("error_id", 1);
        }
    }

}
