<?php
/**
 * 
 * @authors wyf 
 * @date    2016-06-04 09:56:43
 */

require_once 'ActionBase.class.php';
require_once DIR . "/model/SubmitLoginModel.class.php";
require_once DIR . "/lib/User.class.php";
class SubmitLogin extends ActionBase {
	
    public function action(){
    	//页面展示
    	$model = new SubmitLoginModel();
    	$result = $model->getResult();
    //    var_dump($result);die;   凭借在此处的调试，成功找到了submitLoginModel中的data数组所对应的数据
    	$result['params']['safe']['action'] = 'login';
    	if($result['code'] == 1){
    		$tplVar = array(
    			$result['error_msg'] => 1,
    			'params'=>$result['params'],
    			);
    		
    		$this->tpl->assign($tplVar);
    		$this->tpl->display('login.tpl');
    	}else{
            //登录状态的维持
            $userInfo['user_id'] = $result['data']['user_id'];
            $userInfo['nick_name'] = $result['data']['nick_name'];
            $userInfo['priority'] = $result['data']['priority'];
            User::_setUserInfo($userInfo);
            header('Location: http://'.global_localhost.'/blog_maizi/blog/');
        }
    }
}