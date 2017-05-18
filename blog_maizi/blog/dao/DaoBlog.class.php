<?php

require_once 'DaoBase.class.php';

class DaoBlog extends DaoBase {

    protected $table_name = "blog";

    public function insertBlog($data) {
        return $this->insert($data);
    }

    public function AuditGetUserBlogListByUserId() {
        $filed = array(
            'id',
            'title',
            'blog_type',
            'show',
            'audit',
            'blog',
            'user_id',
            'create_time',
        );
        $where = array('is_deleted = ' => 0,
            'audit = ' => 1,//audit==1说明帖子未审核过
        );
        $endWith = " order by create_time desc";
        return $this->select($filed, $where, $endWith);
    }
    public function getUserBlogListByUserId($user_id) {
        $filed = array(
            'id',
            'title',
            'blog_type',
            'show',
            'audit',
            'blog',
            'user_id',
            'create_time',
        );
        $where = array('user_id = ' => $user_id,
            'is_deleted = ' => 0,//is_deleted说明帖子没有被删除
            'audit = ' => 0,//audit==0说明帖子已经审核过了
        );
        $endWith = " order by create_time desc";
        return $this->select($filed, $where, $endWith);
    }

    public function getBlogByID($id) {
        $filed = array(
            'id',
            'title',
            'blog_type',
            'show',
            'audit',
            'blog',
            'user_id',
            'create_time',
        );
        $where = array('id = ' => $id,
            'is_deleted = ' => 0,
             'audit = ' => 0
        );
        $endWith = " order by create_time desc";
        return $this->select($filed, $where, $endWith);
    }
    public function getBlogByID_Audit($id) {
        $filed = array(
            'id',
            'title',
            'blog_type',
            'show',
            'audit',
            'blog',
            'user_id',
            'create_time',
        );
        $where = array('id = ' => $id,
            'is_deleted = ' => 0,
             'audit = ' => 1
        );
        $endWith = " order by create_time desc";
        return $this->select($filed, $where, $endWith);
    }

    public function updateBlog($data, $where) {
        return $this->update($data, $where);
    }

    public function getBlogList() {
        $filed = array(
            'id',
            'title',
            'blog_type',
            'show',
            'audit',
            'blog',
            'user_id',
            'create_time',
        );
        $where = array('is_deleted = ' => 0,
             'audit = ' => 0);//此处得到帖子的情况，要求审核通过，并且没有被删除
        $endWith = " order by create_time desc";
        return $this->select($filed, $where, $endWith);
    }

    //delete blog
    public function deleteBlog($where) {
        return $this->delete($where);
    }
    //judge blog
    public function judgeBlog($where,$pass,$deny) {
        //此处为审核的精髓之处
     //   if($pass / $deny >= 1.5){
        if($pass == 1 ){
            $confirm = array();
            $confirm[code]= $this->judge_pass($where);
            $confirm[audit]= 1;
            return $confirm;
        }
        if($deny == 1 ){
            $confirm = array();
            $confirm[code]= $this->judge_deny($where);
            $confirm[audit]= 0;
            return $confirm;
        }
    }

}
