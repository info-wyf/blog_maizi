<?php

/**
 * 登陆action
 * @authors wyf
 * @date    2016-06-04 09:48:33
 */
require_once 'ActionBase.class.php';
require_once DIR . "/model/LoginModel.class.php";

class Login extends ActionBase {

    public function action() {
        //页面展示
        $model = new LoginModel();
        $result = $model->getResult();

        $tplVar = array(
            'params' => $result['params'],
        );
        $this->tpl->assign($tplVar);
        $this->tpl->display('login.tpl');
    }

}
