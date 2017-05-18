<?php

/**
 * 
 * @authors wyf 
 * @date    2016-06-04 10:01:12
 */
require_once DIR . "/../smarty/libs/Smarty.class.php";
require_once DIR . "/lib/User.class.php";

class ActionBase {

    public $need_login;
    public $tpl;
    public $user_info;
    

    public function __construct() {
        $this->user_info = User::_getUserInfo();
        $tplVar['user_info'] = $this->user_info;
        $this->tpl = new Smarty();
        $this->tpl->left_delimiter = "{{";
        $this->tpl->right_delimiter = "}}";
        $this->tpl->assign($tplVar);
        /*
         * 重要！！！
         * 此处定义的全局变量，定义了本地服务器加端口号
         */
    define('global_localhost', 'www.wyfshu.xyz:8090');//123.206.206.42:8090
        /*
         *  此处说明，每一个页面都是需要检测登录状态的，
         * 如果是登录状态，那么传过来的userinfo就不为空，
         * 否则就位跳转到登录界面
         */
        if ($this->need_login == 1) {
            $this->checkLogin();
        }
    }

    /**
     * 
     * @param  [type]
     * @return [type]
     */
    public function checkLogin() {
        if (empty($this->user_info)) {
            header('Location: http://'.global_localhost.'/blog_maizi/blog/?action=login');
        }
    }

}
