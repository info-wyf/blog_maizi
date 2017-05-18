<?php

/**
 * 
 * @authors wyf
 * @date    2016-06-04 10:59:12
 */
require_once 'ModelBase.class.php';
require_once DIR . "/dao/DaoBlog.class.php";

class JudgeBlogModel extends ModelBase {

    //执行逻辑
    public function preform() {
        $DaoBlog = new DaoBlog();
        $where = array('id = ' => $this->params['safe']['id']);
        /*
         * 此处为审核机制的核心算法处
         * audit传过来的ok为1表示了审核者点击了通过，通过则pass自增1
         * audit传过来的ok为0表示了审核者点击了不通过通过，不通过则deny自增1
         */
        
        if ($this->params['safe']['ok'] == 1) {
            $pass = 1;
        }
        if ($this->params['safe']['ok'] == 0) {
            $deny = 1;
        }
    //    var_dump($pass,$deny);die;
        
        $ret = $DaoBlog->judgeBlog($where,$pass,$deny);
    //调试    print_r($ret);
        $this->result['code'] = $ret[code] == true ? 0 : -1;
        $this->result['confirm'] = $ret[audit] == true ? 0 : -1;
    //调试   print_r($this->result);die;
    }

    //检测参数
    public function checkparams() {
        if (empty($this->params['safe']['id'])) {
            throw new Exception("error_id", 1);
        }
    }

}
