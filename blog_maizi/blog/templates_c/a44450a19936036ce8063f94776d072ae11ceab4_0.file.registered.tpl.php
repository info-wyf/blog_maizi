<?php
/* Smarty version 3.1.29, created on 2016-08-02 17:00:42
  from "C:\AVSers\WYF_info\blog_maizi\blog\templates\registered.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a0613a9e9530_24341500',
  'file_dependency' => 
  array (
    'a44450a19936036ce8063f94776d072ae11ceab4' => 
    array (
      0 => 'C:\\AVSers\\WYF_info\\blog_maizi\\blog\\templates\\registered.tpl',
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
function content_57a0613a9e9530_24341500 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/blog.js"><?php echo '</script'; ?>
>
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">
			<div style="margin:10px 0px 50px 120px">
				<h2>注 册</h2>
				<form action="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=SubmitRegistered" method="post" class="form" onsubmit="return checkRegistered();">
					<ul>
						<li>
							<label >用户名<font color="red"> *字母数字下划线</font></label>
							<input type="text" size="45" class="input-text" name="user_name" id="name"/>
							<font color="red" <?php if ($_smarty_tpl->tpl_vars['error_name']->value != 1) {?>style="display:none"<?php }?> id="name_error"> *请正确输入用户名</font>
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



	</div> <!-- /section -->

</div> <!-- /main -->	
	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
