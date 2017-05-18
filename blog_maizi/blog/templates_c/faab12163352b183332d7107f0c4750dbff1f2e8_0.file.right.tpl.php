<?php
/* Smarty version 3.1.29, created on 2016-08-02 16:33:22
  from "C:\AVSers\WYF_info\blog_maizi\blog\templates\right.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a05ad224a2f9_35194332',
  'file_dependency' => 
  array (
    'faab12163352b183332d7107f0c4750dbff1f2e8' => 
    array (
      0 => 'C:\\AVSers\\WYF_info\\blog_maizi\\blog\\templates\\right.tpl',
      1 => 1470124901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a05ad224a2f9_35194332 ($_smarty_tpl) {
?>
		<!-- SIDEBAR -->
<div id="aside">

			<!-- SIDEBAR MENU -->
			<h3 class="nomb">名人推荐</h3>
			
			<ul class="sponsors">
			<?php
$_from = $_smarty_tpl->tpl_vars['hot_user']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
				<li>
					<a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=blogList&user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nick_name'];?>
</a><br />
					<?php echo $_smarty_tpl->tpl_vars['item']->value['tips'];?>

				</li>
			<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
			</ul>			
		
</div> <!-- /aside --><?php }
}
