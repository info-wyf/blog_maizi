<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-04-03 20:56:59
 */
require_once 'ModelBase.class.php';
require_once DIR . "/dao/DaoUser.class.php";
class SubmitRegisteredModel extends ModelBase {

    //执行逻辑
    public  function preform(){
    	$DaoUser = new DaoUser();
        //检测用户是否存在
        $data['user_name'] = $this->params['safe']['user_name'];
        $data['password'] =  md5($this->params['safe']['password']);
        $data['nick_name'] = $this->params['safe']['nick_name'];
        $data['tips'] = $this->params['safe']['tips'];
        $data['create_time'] = time();
        $ret = $DaoUser->addUser($data);
        $this->result['code'] = $ret == 0 ?  1 : 0;
    }


	//检测参数
    public function checkparams(){
        if(empty($this->params['safe']['user_name'])){
            throw new Exception("error_name", 1);
        }
     }
}