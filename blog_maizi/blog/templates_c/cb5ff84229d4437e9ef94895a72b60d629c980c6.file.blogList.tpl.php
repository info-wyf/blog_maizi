<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 15:15:35
         compiled from ".\templates\blogList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8247553b6e0ace9773-02114554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5ff84229d4437e9ef94895a72b60d629c980c6' => 
    array (
      0 => '.\\templates\\blogList.tpl',
      1 => 1430032534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8247553b6e0ace9773-02114554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553b6e0ae25e46_17481924',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'pageInfo' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553b6e0ae25e46_17481924')) {function content_553b6e0ae25e46_17481924($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/botton.css" />
	<div id="section" class="box">

		<ul class="articles box">
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['bloglist'])) {?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['bloglist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<li>
						<h2><a href="http://localhost/blog/?action=bloginfo&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>

						<div class="article-info box">

							<p class="f-right"><a href="#" class="comment">评论 (<?php echo $_smarty_tpl->tpl_vars['item']->value['comment_total'];?>
)</a></p>

							<p class="f-left"><?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>
 | 分类  <?php echo $_smarty_tpl->tpl_vars['item']->value['blog_type_name'];?>
</p>

						</div> <!-- /article-info -->	

						<p>
							<?php echo $_smarty_tpl->tpl_vars['item']->value['blog'];?>

						</p>
						<p class="more"><a href="/blog/?action=deleteBlog&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
"  onclick= "if(confirm( '是否确定！ ')==false)return   false; ">删除&raquo;</a></p>
					</li>
				<?php } ?>
			<?php } else { ?>
			<h1>
				暂无博文
			</h1>
			<?php }?>	
				
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page_max']>1) {?>
			<div class="pagination box">
				<p class="f-right">
					<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page']>1) {?>
						<a href="http://localhost/blog/?action=bloglist&page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']-1;?>
&user_id=<?php echo $_smarty_tpl->tpl_vars['params']->value['safe']['user_id'];?>
">上一页 &raquo;</a>
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageInfo']->value['page_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<a href="http://localhost/blog/?action=bloglist&page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
&user_id=<?php echo $_smarty_tpl->tpl_vars['params']->value['safe']['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['pageInfo']->value['page']) {?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page']<$_smarty_tpl->tpl_vars['pageInfo']->value['page_max']) {?>
					<a href="http://localhost/blog/?action=bloglist&page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
&user_id=<?php echo $_smarty_tpl->tpl_vars['params']->value['safe']['user_id'];?>
">下一页 &raquo;</a>
					<?php }?>
				</p>
				<p class="f-left"> 1 / 13 页</p>
			</div> 
			<?php }?>
	</div> 

</div> <!-- /main -->	
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
