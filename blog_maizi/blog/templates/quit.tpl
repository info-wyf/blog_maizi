{{include file='header.tpl'}}
	<script type="text/javascript" src="templates/javascript/blog.js"></script>
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">
			<div style="margin:50px 0px 50px 90px">
                            <form action="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=SubmitQuit" method="post" class="form">
                                <input type="submit" value=" 退出当前账号 " class="input-submit"  onclick= "if(confirm( '是否确定！ ')===false)return   false; "/>
                            </form>
			</div>
		</div> 
                 
		
	</div> <!-- /section -->

{{include file='footer.tpl'}}