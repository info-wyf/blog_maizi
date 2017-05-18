{{include file='header.tpl'}}

	<div id="section" class="box">
				<h2>{{$data.blogInfo.title}}</h2>

				<div >
					{{if $data.self == 1}}<p class="f-right">
                                            <a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=updateBlog&id={{$data.blogInfo.id}}" class="comment">编辑</a>
                                        </p>
                                        {{/if}}
                                        
					<p class="f-left">{{$data.blogInfo.create_time}}| 分类 {{$data.blogInfo.blog_type}} </p>
				</div>
				
				<div style="border-bottom: 1px dotted #CCC; height:50px;"></div>
				<div style="padding:10px">
					{{$data.blogInfo.blog}}
				</div>
				{{if !empty($data.comment)}}
				<div style="border-bottom: 1px dotted #CCC;"></div>
				<h3>评论</h3>
					{{foreach item=item from=$data.comment key=key}}
						<div style="padding:0 0 0 10px">
							{{$item.user_info.nick_name}}:{{$item.comment}}
							<br/>
							评论时间 : {{$item.create_time}}
						</div>
					<div style="border-bottom: 1px dotted #CCC;"></div>
					{{/foreach}}
				{{/if}}

				
				{{if $data.self != 1 && $data.is_login == 1}}
                                <!--如果不是自己的博客，那么就展示评论的页面-->
				<form action="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=SubmitComment" method="post" class="form">
					<ul>
						<textarea cols="75" rows="5" class="input-text"  name="comment"></textarea>
						<input type="hidden" value="{{$data.blogInfo.id}}" name="blog_id"/>
						<li><input type="submit" value=" 评论 " class="input-submit"  /></li>
					</ul>
				</form>
				{{/if}}
                                 <!--如果是自己的博客，那么就可以展开回复页面-->
                                {{if $data.self == 1 && $data.is_login == 1}}
                                <form action="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=SubmitComment" method="post" class="form">
					<ul>
						<textarea cols="75" rows="5" class="input-text"  name="comment"></textarea>
						<input type="hidden" value="{{$data.blogInfo.id}}" name="blog_id"/>
						<li><input type="submit" value=" 回复 " class="input-submit"  /></li>
					</ul>
				</form>
                                {{/if}}
	</div> 
</div> 	
{{include file='footer.tpl'}}