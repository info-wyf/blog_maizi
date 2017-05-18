<?php
/* Smarty version 3.1.29, created on 2016-08-02 16:01:42
  from "D:\WWW\blog_maizi\blog\templates\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a05366a0f737_05838284',
  'file_dependency' => 
  array (
    'd7efec2fe45479357053e1b90dffa7ebd6cfa0c7' => 
    array (
      0 => 'D:\\WWW\\blog_maizi\\blog\\templates\\header.tpl',
      1 => 1470124901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a05366a0f737_05838284 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="en" />
        <meta name="description" content="[HERE PASTE YOUR DESCRIPTION]" />
        <meta name="author" content="Template:TemplatesDock " />
        <link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/main.css" />
        <link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/skin.css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/cufon-yui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/jquery-1.8.3.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">Cufon.replace('h1, h2, h3, h4, h5, h6', {hover:true});<?php echo '</script'; ?>
>	
        <title>PHP 小论坛</title>
    </head>

    <body>

        <div class="main">

            <!-- HEADER -->
            <div id="header" class="box">

                <h1 id="logo">PHP<span> 小论坛</span></h1>

                <!-- NAVIGATION -->
                <ul id="nav">
                    <li <?php if (empty($_smarty_tpl->tpl_vars['params']->value['safe']['action']) || $_smarty_tpl->tpl_vars['params']->value['safe']['action'] == 'index') {?>class="current"
                        <?php }?>><a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/">首页</a></li>
                    
                    <li <?php if ($_smarty_tpl->tpl_vars['params']->value['safe']['action'] == 'myblog') {?> class="current" 
                        <?php }?>><a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=myblog">我的帖子</a></li>
                        
                        <?php if ($_smarty_tpl->tpl_vars['user_info']->value['priority'] >= 5) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['params']->value['safe']['action'] == 'audit') {?> class="current" 
                                <?php }?>><a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=audit">待审核</a></li>
                        
                        <?php }?>
                            
                        <?php if (!$_smarty_tpl->tpl_vars['user_info']->value) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['params']->value['safe']['action'] == 'login') {?> class="current" 
                                <?php }?> ><a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/index.php?action=login">登录/注册</a></li>
                        <?php } else { ?>
                            <li <?php if ($_smarty_tpl->tpl_vars['params']->value['safe']['action'] == 'quit') {?> class="current" 
                                <?php }?>><a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/index.php?action=quit"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['nick_name'];?>
</a></li>
                    <!-- 这里需要注意的是，如何在登录进入后，能够退出当前账号 *****2016年6月14日已解决，用session_unset()方式，写在了User.class里-->
                        <?php }?>
                </ul>

            </div> <!-- /header --><?php }
}
