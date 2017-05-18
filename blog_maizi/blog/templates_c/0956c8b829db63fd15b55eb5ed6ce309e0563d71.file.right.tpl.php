<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-25 18:29:44
         compiled from ".\templates\right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21239551d44c79cf937-38039478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0956c8b829db63fd15b55eb5ed6ce309e0563d71' => 
    array (
      0 => '.\\templates\\right.tpl',
      1 => 1429957783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21239551d44c79cf937-38039478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551d44c79d37b7_76477202',
  'variables' => 
  array (
    'hot_user' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d44c79d37b7_76477202')) {function content_551d44c79d37b7_76477202($_smarty_tpl) {?>		<!-- SIDEBAR -->
<div id="aside">

			<!-- SIDEBAR MENU -->
			<h3 class="nomb">名人推荐</h3>
			
			<ul class="sponsors">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hot_user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<a href="http://localhost/blog/?action=blogList&user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nick_name'];?>
</a><br />
					<?php echo $_smarty_tpl->tpl_vars['item']->value['tips'];?>

				</li>
			<?php } ?>
			</ul>			
		
</div> <!-- /aside --><?php }} ?>
