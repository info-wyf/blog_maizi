{{include file='header.tpl'}}
    <script type="text/javascript" charset="utf-8" src="templates/javascript/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="templates/javascript/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="templates/javascript/blog.js"></script>
	<div id="section" class="box">
				<h2>编辑帖子</h2>

				<div style="border-bottom: 1px dotted #CCC;"></div>
				
				
				<form action="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=SubmitUpdateBlog" method="post" class="form" onsubmit="return checkPostBlog();" >
					<ul>
						<li>
							<input type="text" size="45" class="input-text" value="{{$data.blogInfo.title}}" name="title" id="title">
                            <font color="red" style="display:none" id="title_error">请输入title</font>
							分类:<select name="blog_type">
                                    {{foreach from=$data.blog_type_list item=item key=key}}
                                    <option value="{{$key}}" {{if $data.blogInfo.blog_type == $key}} selected="selected" {{/if}}>{{$item}}</option>
                                    {{/foreach}}
                                </select>
							只自己可见<input type="checkbox"{{if $blogInfo.show == 1}} checked="checked" {{/if}}name="show" value="1"> 
						</li>
						<script id="editor" type="text/plain" style="width:900px;height:500px;">{{$data.blogInfo.blog}}</script>
                        <input type="hidden" value="{{$data.blogInfo.id}}" name="id" />
						<li><input type="submit" value=" 提交 " class="input-submit"  /></li>
					
					</ul>
				</form>
					
	</div> 

</div> 
{{include file='footer.tpl'}}



</body>
</html>
<script type="text/javascript">

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
</script>