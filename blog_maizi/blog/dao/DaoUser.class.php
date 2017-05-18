<?php

require_once 'DaoBase.class.php';

class DaoUser extends DaoBase {

    protected $table_name = "user";

    //根据用户名跟密码取得相应的数据
    public function getUserInfoByUsernameAndPassWord($user_name, $password) {
        $filed = array('user_id', 'nick_name', 'priority');
        $where = array('user_name = ' => $user_name,
            'password = ' => md5($password)
        );
        return $this->select($filed, $where);
    }

    //根据userId来取用户信息
    public function getUserInfoByUserId($user_id) {
        $filed = array('user_id', 'nick_name', 'priority');
        //where是指数据库查询的条件
        $where = array('user_id = ' => $user_id,
            'is_deleted = ' => 0,
        );
        return $this->select($filed, $where);
    }
    
    //向数据库插入用户
    public function addUser($data) {
        return $this->insert($data);
    }

    //此处为右侧的名人推荐的人数
    public function getUser() {
        $filed = array('user_id', 'nick_name', 'tips');
        $where = array('is_deleted = ' => 0);
        
        $endWith = " order by create_time desc limit 8";
        return $this->select($filed, $where, $endWith);
    }


}
