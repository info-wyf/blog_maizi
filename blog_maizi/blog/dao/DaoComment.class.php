<?php

require_once 'DaoBase.class.php';

class DaoComment extends DaoBase {

    protected $table_name = "comment";

    public function addCommnet($data) {
        return $this->insert($data);
    }

    public function getCommentByBlogID($blog_id) {
        $filed = array(
            'id',
            'blog_id',
            'comment',
            'create_time',
            'user_id',
        );
        $where = array('is_deleted = ' => 0,
            'blog_id = ' => $blog_id,
        );
        $endWith = " order by create_time desc";
        return $this->select($filed, $where, $endWith);
    }

    public function getTotalCommentByBlogId($blog_id) {
        $where = array('is_deleted = ' => 0,
            'blog_id = ' => $blog_id,
        );
        return $this->getCount($where);
    }

}
