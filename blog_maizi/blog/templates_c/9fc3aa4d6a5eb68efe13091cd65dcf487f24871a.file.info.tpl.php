<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 15:20:33
         compiled from ".\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19811552fb4f8727928-75140441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc3aa4d6a5eb68efe13091cd65dcf487f24871a' => 
    array (
      0 => '.\\templates\\info.tpl',
      1 => 1430032832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19811552fb4f8727928-75140441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552fb4f8815de1_19441336',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fb4f8815de1_19441336')) {function content_552fb4f8815de1_19441336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div id="section" class="box">
				<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['title'];?>
</h2>

				<div >
					<?php if ($_smarty_tpl->tpl_vars['data']->value['self']==1) {?><p class="f-right"><a href="http://localhost/blog/?action=updateBlog&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['id'];?>
" class="comment">编辑</a></p><?php }?>
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
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['comment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<div style="padding:0 0 0 10px">
							<?php echo $_smarty_tpl->tpl_vars['item']->value['user_info']['nick_name'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

							<br/>
							评论时间 : <?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>

						</div>
					<div style="border-bottom: 1px dotted #CCC;"></div>
					<?php } ?>
				<?php }?>

				
				<?php if ($_smarty_tpl->tpl_vars['data']->value['self']!=1&&$_smarty_tpl->tpl_vars['data']->value['is_login']==1) {?>
				<form action="http://localhost/blog/?action=SubmitComment" method="post" class="form">
					<ul>
						<textarea cols="75" rows="5" class="input-text"  name="comment"></textarea>
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['id'];?>
" name="blog_id"/>
						<li><input type="submit" value=" 提交 " class="input-submit"  /></li>
					</ul>
				</form>
				<?php }?>
	</div> 
</div> 	
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
