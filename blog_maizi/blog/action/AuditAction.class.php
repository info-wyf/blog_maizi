<?php

require_once 'ActionBase.class.php';
require_once DIR . "/model/AuditModel.class.php";

class Audit extends ActionBase {
	public $need_login = 1;
    public function action(){
        //页面展示
        $AuditModel = new AuditModel();
        $result = $AuditModel->getResult($this->user_info);
        $this->tpl->assign($result);
        $this->tpl->display('audit.tpl');
    }
}