<?php
/* Smarty version 3.1.29, created on 2016-08-02 16:06:56
  from "D:\WWW\blog_maizi\blog\templates\quit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a054a0a847c0_33838745',
  'file_dependency' => 
  array (
    '52c4c5bc1fc522788d2827a7f9140dc2aaa1f165' => 
    array (
      0 => 'D:\\WWW\\blog_maizi\\blog\\templates\\quit.tpl',
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
function content_57a054a0a847c0_33838745 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/blog.js"><?php echo '</script'; ?>
>
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">
			<div style="margin:50px 0px 50px 90px">
                            <form action="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=SubmitQuit" method="post" class="form">
                                <input type="submit" value=" 退出当前账号 " class="input-submit"  onclick= "if(confirm( '是否确定！ ')===false)return   false; "/>
                            </form>
			</div>
		</div> 
                 
		
	</div> <!-- /section -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
