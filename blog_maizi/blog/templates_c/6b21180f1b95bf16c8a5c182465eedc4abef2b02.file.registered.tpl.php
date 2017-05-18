<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 15:09:28
         compiled from ".\templates\registered.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4429551e88395bf574-63085950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b21180f1b95bf16c8a5c182465eedc4abef2b02' => 
    array (
      0 => '.\\templates\\registered.tpl',
      1 => 1428066567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4429551e88395bf574-63085950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e88395f6077_46789767',
  'variables' => 
  array (
    'error_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e88395f6077_46789767')) {function content_551e88395f6077_46789767($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/blog.js"><?php echo '</script'; ?>
>
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">
			<div style="margin:10px 0px 50px 120px">
				<h2>注 册</h2>
				<form action="http://localhost/blog/?action=SubmitRegistered" method="post" class="form" onsubmit="return checkRegistered();">
					<ul>
						<li>
							<label >用户名<font color="red"> *字母数字下划线</font></label>
							<input type="text" size="45" class="input-text" name="user_name" id="name"/>
							<font color="red" <?php if ($_smarty_tpl->tpl_vars['error_name']->value!=1) {?>style="display:none"<?php }?> id="name_error"> *请正确输入用户名</font>
						</li>
						
						<li>
							<label >密码 </label>
							<input type="password" size="45" class="input-text"  name="password"  id='password'/>
							<font color="red" style="display:none" id="password_error"> *请输入密码</font>
						</li>
						<li>
							<label>再次输入密码 </label>
							<input type="password" size="45" class="input-text"  name="apassword" id="apassword"/>
							<font color="red" style="display:none" id="apassword_error"> *两次密码不一致</font>
						</li>

						<li>
							<label >昵称<font color="red"> *0~20个字符</font></label>
							<input type="text" size="45" class="input-text"  name="nick_name" id="nick_name"/>
							<font color="red" style="display:none" id="nick_name_error"> *昵称不能为空</font>
						</li>
						<li>
							<label >个人签名<font color="red"> *最多30个汉字</font></label>
							<textarea cols="47" rows="2" class="input-text"  name="tips" id='tips'></textarea>
							<font color="red" style="display:none" id="tips_error"> *个人签名不能为空</font>
						</li>
						
						<li><input type="submit" value=" 提交 " class="input-submit" /></li>
					</ul>
				</form>
			</div>
		</div> <!-- /content -->

		<!-- SIDEBAR -->
	<?php echo $_smarty_tpl->getSubTemplate ('right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div> <!-- /section -->

</div> <!-- /main -->	
	
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
