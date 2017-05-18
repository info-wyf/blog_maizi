<?php

/**
 * 登陆action
 * @authors wyf
 * @date    2016-06-04 09:48:33
 */
require_once 'ActionBase.class.php';
require_once DIR . "/model/QuitModel.class.php";

class Quit extends ActionBase {

    public function action() {
        //页面展示
        $model = new QuitModel();
        $result = $model->getResult();

        $tplVar = array(
            'params' => $result['params'],
        );
        $this->tpl->assign($tplVar);
        $this->tpl->display('quit.tpl');
    }

}
