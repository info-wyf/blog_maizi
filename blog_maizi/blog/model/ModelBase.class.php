<?php

/**
 * 
 * @authors wyf
 * @date    2016-06-04 08:25:25
 */
abstract class ModelBase {

    public $params;
    public $result;
    public $user_info;

    //检测参数
    public abstract function checkparams();

    //执行逻辑
    public abstract function preform();

    //执行器
    public function getResult($user_info = false) {
        $this->user_info = $user_info;
        $this->getParams();
        /* 
         * 此处的result数组中的code是用来确认更新，删除等操作是否到位，
         * 到位则会返回boolen的true使得code==0判断是否跳转到相应的网页。
         * confirm用来标识是否审核通过
         */
        $this->result = array(
            'code' => 0,
            'confirm' => 0,
            'error_msg' => '',
            'data' => '',
            'params' => $this->params,
        );
  
        
        try {
            $this->checkparams();
            $this->preform();
        } catch (Exception $e) {
            $this->result['code'] = $e->getCode();
            $this->result['error_msg'] = $e->getMessage();
        }

        return $this->result;
    }

    public function getParams() {
        $params = $_REQUEST; //get & post
        $arr = array();
        foreach ($params as $key => $value) {
            $arr['unsafe'][$key] = $value; //不安全
            $arr['safe'][$key] = addslashes($value); //安全
        }
        $this->params = $arr;
    }

}
