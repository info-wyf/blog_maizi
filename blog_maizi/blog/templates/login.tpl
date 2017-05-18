{{include file='header.tpl'}}
	<script type="text/javascript" src="templates/javascript/blog.js"></script>
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">
			<div style="margin:50px 0px 50px 90px">
				<h2>登 录</h2>
				<font color="red" {{if $error_login != 1}}style="display:none"{{/if}} id="name_error"> 用户不存在</font>
				<form action="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=SubmitLogin" method="post" class="form" onSubmit="return checkSubmitLogin();">
					<ul>
						<li>
							<label for="input-01">用户名</label>
							<input type="text" size="45" class="input-text" id="name" name="user_name"  value="{{$params.safe.user_name}}"  />
							<font color="red" {{if $error_name != 1}}style="display:none"{{/if}} id="name_error"> *请正确输入用户名</font>
						</li>
						
						<li>
							<label for="input-03">密码</label>
							<input type="password" size="45" class="input-text" id="password" name="password" />
							<font color="red" style="display:none" id="password_error"> *请输入密码</font>
						</li>
						
						<li><input type="submit" value=" 提交 " class="input-submit"  /></li>

						<a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=registered">没有账号去注册</a>
					</ul>
				</form>
			</div>
		</div> 
                 
		
	</div> <!-- /section -->

{{include file='footer.tpl'}}