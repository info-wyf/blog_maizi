{{include file='header.tpl'}}
<link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/botton.css" />
	<div id="section" class="box">

            
		
		<ul class="articles box">
			{{if !empty($data.audit_list)}} 
				{{foreach from=$data.audit_list item=item key=key}}
                                
					<li>
						<h2><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=bloginfoaudit&id={{$item.id}}">{{$item.title}}</a></h2>
                                                      
						<div class="article-info box">

							<p class="f-right"><a href="#" class="comment">评论({{$item.comment_total}})</a></p>

							<p class="f-left">{{$item.create_time}} | 分类  {{$item.blog_type_name}} | 作者 <a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=blogList&user_id={{$item.user_info.user_id}}">{{$item.user_info.nick_name}}</a></p>

						</div> <!-- /article-info -->	

						<p>
							{{$item.blog}}
						</p>
						<p class="more"><a href="/blog_maizi/blog/?action=judgeBlog&id={{$item.id}}&page={{$pageInfo.page}}&ok=1" >通过</a></p>
						<p class="more"><a href="/blog_maizi/blog/?action=judgeBlog&id={{$item.id}}&page={{$pageInfo.page}}&ok=0" 
                                                                   onclick= "if(confirm( '是否确定！ ')===false)return   false; ">不通过</a></p>
					</li>
                                        <div style="border-bottom: 1px dotted #CCC;margin: 10px 0 0 0"></div>
				{{/foreach}}
			{{else}}
			<h1>
				暂无需要审核的帖子
			</h1>
			{{/if}}	
				
			</ul>
			{{if $pageInfo.page_max > 1}}
			<div class="pagination box">
				<p class="f-right">
					{{if $pageInfo.page > 1}}
						<a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=audit&page={{$pageInfo.page-1}}">上一页 &raquo;</a>
					{{/if}}
					{{foreach from=$pageInfo.page_arr item=item}}
						<a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=audit&page={{$item}}" {{if $item==$pageInfo.page}}class="current"{{/if}}>{{$item}}</a>
					{{/foreach}}
					{{if $pageInfo.page < $pageInfo.page_max}}
					<a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=audit&page={{$pageInfo.page+1}}">下一页 &raquo;</a>
					{{/if}}
				</p>
				<p class="f-left"> {{$pageInfo.page}} / {{$pageInfo.page_max}} 页</p>
			</div> 
			{{/if}}
	</div> 

</div> <!-- /main -->	
{{include file='footer.tpl'}}
