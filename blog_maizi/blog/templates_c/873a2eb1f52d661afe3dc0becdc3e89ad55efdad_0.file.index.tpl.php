<?php
/* Smarty version 3.1.29, created on 2016-08-02 16:01:42
  from "D:\WWW\blog_maizi\blog\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a05366944504_03791192',
  'file_dependency' => 
  array (
    '873a2eb1f52d661afe3dc0becdc3e89ad55efdad' => 
    array (
      0 => 'D:\\WWW\\blog_maizi\\blog\\templates\\index.tpl',
      1 => 1470124901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:right.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57a05366944504_03791192 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<!-- COLUMNS -->
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">

			<!-- LIST OF ARTICLES -->
			<ul class="articles box">
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['list'];
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
				<li>
					<h2><a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=bloginfo&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>

					<div class="article-info box">

						<p class="f-right"><a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=bloginfo&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="comment">评论 (<?php echo $_smarty_tpl->tpl_vars['item']->value['comment_total'];?>
)</a></p>
                                                                            <!--此处效果为点击评论数，也可以跳转到文章页 -->
						<p class="f-left"><?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>
 | 作者 <a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=blogList&user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_info']['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_info']['nick_name'];?>
</a> </p>
                                                                             <!--此处显示作者+昵称，点击昵称，可进入作者主页 -->
					</div> <!-- /article-info -->	

					<p><?php echo $_smarty_tpl->tpl_vars['item']->value['blog'];?>

					</p>
					<p class="more"><a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=bloginfo&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">查看全文&raquo;</a></p>
				</li>
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
			</ul>

			<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page_max'] > 1) {?>
			<div class="pagination box">
				<p class="f-right">
					<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page'] > 1) {?>
						<a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']-1;?>
">上一页 &raquo;</a>
					<?php }?>
					<?php
$_from = $_smarty_tpl->tpl_vars['pageInfo']->value['page_arr'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
						<a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value == $_smarty_tpl->tpl_vars['pageInfo']->value['page']) {?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
					<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>
					<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page'] < $_smarty_tpl->tpl_vars['pageInfo']->value['page_max']) {?>
					<a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
">下一页 &raquo;</a>
					<?php }?>
				</p>
				<p class="f-left"> <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
 / <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_max'];?>
 页</p>
			</div> 
			<?php }?>
		</div> 
		<!-- 名人推荐 ，待完善，可以以后用户量增多后，根据签到数+发帖数综合评判-->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	</div> <!-- /section -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
