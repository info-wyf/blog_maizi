<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 21:54:10
         compiled from ".\templates\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26453552fbad0bae1a2-48453444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad37676fb24197666326241a23ece34f8b7843ce' => 
    array (
      0 => '.\\templates\\update.tpl',
      1 => 1429192430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26453552fbad0bae1a2-48453444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552fbad0c522c3_19568616',
  'variables' => 
  array (
    'data' => 0,
    'key' => 0,
    'item' => 0,
    'blogInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fbad0c522c3_19568616')) {function content_552fbad0c522c3_19568616($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="templates/javascript/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="templates/javascript/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/blog.js"><?php echo '</script'; ?>
>
	<div id="section" class="box">
				<h2>编辑博文</h2>

				<div style="border-bottom: 1px dotted #CCC;"></div>
				
				
				<form action="http://localhost/blog/?action=submitupdateblog" method="post" class="form" onsubmit="return checkPostBlog();" >
					<ul>
						<li>
							<input type="text" size="45" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['title'];?>
" name="title" id="title">
                            <font color="red" style="display:none" id="title_error">请输入title</font>
							分类:<select name="blog_type">
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['blog_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['blogInfo']['blog_type']==$_smarty_tpl->tpl_vars['key']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                                    <?php } ?>
                                </select>
							只自己可见<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['blogInfo']->value['show']==1) {?> checked="checked" <?php }?>name="show" value="1"> 
						</li>
						<?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:900px;height:500px;"><?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['blog'];?>
<?php echo '</script'; ?>
>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['blogInfo']['id'];?>
" name="id" />
						<li><input type="submit" value=" 提交 " class="input-submit"  /></li>
					
					</ul>
				</form>
					
	</div> 

</div> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
<?php echo '</script'; ?>
><?php }} ?>
