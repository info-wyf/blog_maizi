<?php
/* Smarty version 3.1.29, created on 2016-08-02 16:01:45
  from "D:\WWW\blog_maizi\blog\templates\info.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a053695e5a77_99604948',
  'file_dependency' => 
  array (
    'bd33c7a0f7de3d665a530384f6bd949b0a3faad9' => 
    array (
      0 => 'D:\\WWW\\blog_maizi\\blog\\templates\\info.tpl',
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
function content_57a053695e5a77_99604948 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div id="section" class="box">
				<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['title'];?>
</h2>

				<div >
					<?php if ($_smarty_tpl->tpl_vars['data']->value['self'] == 1) {?><p class="f-right">
                                            <a href="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=updateBlog&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['id'];?>
" class="comment">编辑</a>
                                        </p>
                                        <?php }?>
                                        
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

				
				<?php if ($_smarty_tpl->tpl_vars['data']->value['self'] != 1 && $_smarty_tpl->tpl_vars['data']->value['is_login'] == 1) {?>
                                <!--如果不是自己的博客，那么就展示评论的页面-->
				<form action="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=SubmitComment" method="post" class="form">
					<ul>
						<textarea cols="75" rows="5" class="input-text"  name="comment"></textarea>
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['id'];?>
" name="blog_id"/>
						<li><input type="submit" value=" 评论 " class="input-submit"  /></li>
					</ul>
				</form>
				<?php }?>
                                 <!--如果是自己的博客，那么就可以展开回复页面-->
                                <?php if ($_smarty_tpl->tpl_vars['data']->value['self'] == 1 && $_smarty_tpl->tpl_vars['data']->value['is_login'] == 1) {?>
                                <form action="http://<?php echo @constant('global_localhost');?>
/blog_maizi/blog/?action=SubmitComment" method="post" class="form">
					<ul>
						<textarea cols="75" rows="5" class="input-text"  name="comment"></textarea>
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['id'];?>
" name="blog_id"/>
						<li><input type="submit" value=" 回复 " class="input-submit"  /></li>
					</ul>
				</form>
                                <?php }?>
	</div> 
</div> 	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
