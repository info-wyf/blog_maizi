<?php

/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-04-06 18:17:15
 */
session_start(); //使用session的时候一定要记得打开，不然无法使用

class User {

    //静态方法
    public static function _setUserInfo($userInfo) {
        $_SESSION['user_id'] = $userInfo['user_id'];
        $_SESSION['nick_name'] = $userInfo['nick_name'];
    //    $_SESSION['user_name'] = $userInfo['user_name'];
        $_SESSION['priority'] = $userInfo['priority'];
    }

    public static function _getUserInfo() {
        if (empty($_SESSION)) {
            return false;
        }
        $userInfo['user_id'] = $_SESSION['user_id'];
        $userInfo['nick_name'] = $_SESSION['nick_name'];
    //    $userInfo['user_name'] = $_SESSION['user_name'];
        $userInfo['priority'] = $_SESSION['priority'];
        return $userInfo;
    }

    public static function _unsetUserInfo() {
        session_unset();
    }

}
