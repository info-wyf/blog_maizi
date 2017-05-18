<?php
/* Smarty version 3.1.29, created on 2016-06-21 10:52:09
  from "D:\WWW\blog_maizi\blog\templates\info_audit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768abd9db1391_96548057',
  'file_dependency' => 
  array (
    '68ebb2335224b98fc432fe37eb60c793eea9e410' => 
    array (
      0 => 'D:\\WWW\\blog_maizi\\blog\\templates\\info_audit.tpl',
      1 => 1466390362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5768abd9db1391_96548057 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div id="section" class="box">
				<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['title'];?>
</h2>

				<div >
                                    <p class="f-left"><?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['create_time'];?>
| 分类 <?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['blog_type'];?>
 </p>
				</div>
				
				<div style="border-bottom: 1px dotted #CCC; height:50px;"></div>
				<div style="padding:10px">
					<?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['blog'];?>

				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['comment'])) {?>
				<div style="border-bottom: 1px dotted #CCC;"></div>
				<h3>评论</h3>
					<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['comment'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
						<div style="padding:0 0 0 10px">
							<?php echo $_smarty_tpl->tpl_vars['item']->value['user_info']['nick_name'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

							<br/>
							评论时间 : <?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>

						</div>
					<div style="border-bottom: 1px dotted #CCC;"></div>
					<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
?>
				<?php }?>

	</div> 
</div> 	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
