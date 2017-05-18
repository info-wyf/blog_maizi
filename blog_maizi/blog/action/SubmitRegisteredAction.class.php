<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-04-03 20:59:26
 */
require_once 'ActionBase.class.php';
require_once DIR . "/model/SubmitRegisteredModel.class.php";

class SubmitRegistered extends ActionBase {
    
    public function action(){
    	//页面展示
    	$model = new SubmitRegisteredModel();
    	$result = $model->getResult();
    	if($result['code'] == 0){
    		$this->tpl->display('succ.tpl');
    	}
    }
}