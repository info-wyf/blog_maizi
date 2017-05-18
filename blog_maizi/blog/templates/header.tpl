<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="en" />
        <meta name="description" content="[HERE PASTE YOUR DESCRIPTION]" />
        <meta name="author" content="Template:TemplatesDock " />
        <link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/main.css" />
        <link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/skin.css" />
        <script type="text/javascript" src="templates/javascript/cufon-yui.js"></script>
        <script type="text/javascript" src="templates/javascript/jquery-1.8.3.js"></script>

        <script type="text/javascript">Cufon.replace('h1, h2, h3, h4, h5, h6', {hover:true});</script>	
        <title>PHP 小论坛</title>
    </head>

    <body>

        <div class="main">

            <!-- HEADER -->
            <div id="header" class="box">

                <h1 id="logo">PHP<span> 小论坛</span></h1>

                <!-- NAVIGATION -->
                <ul id="nav">
                    <li {{if empty($params.safe.action) || $params.safe.action == 'index'}}class="current"
                        {{/if}}><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/">首页</a></li>
                    
                    <li {{if $params.safe.action == 'myblog'}} class="current" 
                        {{/if}}><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=myblog">我的帖子</a></li>
                        
                        {{if $user_info.priority >= 5}}
                            <li {{if $params.safe.action == 'audit'}} class="current" 
                                {{/if}}><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=audit">待审核</a></li>
                        
                        {{/if}}
                            
                        {{if !$user_info}}
                            <li {{if $params.safe.action == 'login'}} class="current" 
                                {{/if}} ><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/index.php?action=login">登录/注册</a></li>
                        {{else}}
                            <li {{if $params.safe.action == 'quit'}} class="current" 
                                {{/if}}><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/index.php?action=quit">{{$user_info.nick_name}}</a></li>
                    <!-- 这里需要注意的是，如何在登录进入后，能够退出当前账号 *****2016年6月14日已解决，用session_unset()方式，写在了User.class里-->
                        {{/if}}
                </ul>

            </div> <!-- /header -->