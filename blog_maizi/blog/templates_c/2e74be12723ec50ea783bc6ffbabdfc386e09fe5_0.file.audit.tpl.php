<?php
/* Smarty version 3.1.29, created on 2016-08-02 19:40:11
  from "C:\AVSers\WYF_info\blog_maizi\blog\templates\audit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a0869b74e737_41046839',
  'file_dependency' => 
  array (
    '2e74be12723ec50ea783bc6ffbabdfc386e09fe5' => 
    array (
      0 => 'C:\\AVSers\\WYF_info\\blog_maizi\\blog\\templates\\audit.tpl',
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
function content_57a0869b74e737_41046839 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/botton.css" />
	<div id="section" class="box">

            
		
		<ul class="articles box">
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['audit_list'])) {?> 
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['audit_list'];
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
/blog_maizi/blog/?action=bloginfoaudit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
                                                      
						<div class="article-info box">

							<p class="f-right"><a href="#" class="comment">评论(<?php echo $_smarty_tpl->tpl_vars['item']->value['comment_total'];?>
)</a></p>

							<p class="f-left"><?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>
 | 分类  <?php echo $_smarty_tpl->tpl_vars['item']->value['blog_type_name'];?>
 | 作者 <a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=blogList&user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_info']['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_info']['nick_name'];?>
</a></p>

						</div> <!-- /article-info -->	

						<p>
							<?php echo $_smarty_tpl->tpl_vars['item']->value['blog'];?>

						</p>
						<p class="more"><a href="/blog_maizi/blog/?action=judgeBlog&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
&ok=1" >通过</a></p>
						<p class="more"><a href="/blog_maizi/blog/?action=judgeBlog&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
&ok=0" 
                                                                   onclick= "if(confirm( '是否确定！ ')===false)return   false; ">不通过</a></p>
					</li>
                                        <div style="border-bottom: 1px dotted #CCC;margin: 10px 0 0 0"></div>
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
			<?php } else { ?>
			<h1>
				暂无需要审核的帖子
			</h1>
			<?php }?>	
				
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page_max'] > 1) {?>
			<div class="pagination box">
				<p class="f-right">
					<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['page'] > 1) {?>
						<a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=audit&page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']-1;?>
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
/blog_maizi/blog/?action=audit&page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
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
/blog_maizi/blog/?action=audit&page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
">下一页 &raquo;</a>
					<?php }?>
				</p>
				<p class="f-left"> <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
 / <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page_max'];?>
 页</p>
			</div> 
			<?php }?>
	</div> 

</div> <!-- /main -->	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
