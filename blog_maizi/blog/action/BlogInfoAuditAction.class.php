<?php
require_once 'ActionBase.class.php';
require_once DIR . "/model/BlogInfoAuditModel.class.php";

class BlogInfoAudit extends ActionBase {
    
    public function action(){
        //页面展示
        $BlogInfoAuditModel = new BlogInfoAuditModel();
        $result = $BlogInfoAuditModel->getResult($this->user_info);

        $this->tpl->assign($result);
        $this->tpl->display('info_audit.tpl');
    }
}