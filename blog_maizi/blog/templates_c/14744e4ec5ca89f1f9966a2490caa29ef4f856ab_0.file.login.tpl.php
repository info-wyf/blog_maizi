<?php
/* Smarty version 3.1.29, created on 2016-08-02 16:06:59
  from "D:\WWW\blog_maizi\blog\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a054a3d118a2_22310992',
  'file_dependency' => 
  array (
    '14744e4ec5ca89f1f9966a2490caa29ef4f856ab' => 
    array (
      0 => 'D:\\WWW\\blog_maizi\\blog\\templates\\login.tpl',
      1 => 1470124901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57a054a3d118a2_22310992 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/blog.js"><?php echo '</script'; ?>
>
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">
			<div style="margin:50px 0px 50px 90px">
				<h2>登 录</h2>
				<font color="red" <?php if ($_smarty_tpl->tpl_vars['error_login']->value != 1) {?>style="display:none"<?php }?> id="name_error"> 用户不存在</font>
				<form action="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=SubmitLogin" method="post" class="form" onSubmit="return checkSubmitLogin();">
					<ul>
						<li>
							<label for="input-01">用户名</label>
							<input type="text" size="45" class="input-text" id="name" name="user_name"  value="<?php echo $_smarty_tpl->tpl_vars['params']->value['safe']['user_name'];?>
"  />
							<font color="red" <?php if ($_smarty_tpl->tpl_vars['error_name']->value != 1) {?>style="display:none"<?php }?> id="name_error"> *请正确输入用户名</font>
						</li>
						
						<li>
							<label for="input-03">密码</label>
							<input type="password" size="45" class="input-text" id="password" name="password" />
							<font color="red" style="display:none" id="password_error"> *请输入密码</font>
						</li>
						
						<li><input type="submit" value=" 提交 " class="input-submit"  /></li>

						<a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=registered">没有账号去注册</a>
					</ul>
				</form>
			</div>
		</div> 
                 
		
	</div> <!-- /section -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
