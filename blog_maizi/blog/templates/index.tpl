{{include file='header.tpl'}}

	<!-- COLUMNS -->
	<div id="section" class="box">

		<!-- CONTENT -->
		<div id="content">

			<!-- LIST OF ARTICLES -->
			<ul class="articles box">
				{{foreach item=item from=$data.list key=key}}
				<li>
					<h2><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=bloginfo&id={{$item.id}}">{{$item.title}}</a></h2>

					<div class="article-info box">

						<p class="f-right"><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=bloginfo&id={{$item.id}}" class="comment">评论 ({{$item.comment_total}})</a></p>
                                                                            <!--此处效果为点击评论数，也可以跳转到文章页 -->
						<p class="f-left">{{$item.create_time}} | 作者 <a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=blogList&user_id={{$item.user_info.user_id}}">{{$item.user_info.nick_name}}</a> </p>
                                                                             <!--此处显示作者+昵称，点击昵称，可进入作者主页 -->
					</div> <!-- /article-info -->	

					<p>{{$item.blog}}
					</p>
					<p class="more"><a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?action=bloginfo&id={{$item.id}}">查看全文&raquo;</a></p>
				</li>
				{{/foreach}}
			</ul>

			{{if $pageInfo.page_max > 1}}
			<div class="pagination box">
				<p class="f-right">
					{{if $pageInfo.page > 1}}
						<a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?page={{$pageInfo.page-1}}">上一页 &raquo;</a>
					{{/if}}
					{{foreach from=$pageInfo.page_arr item=item}}
						<a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?page={{$item}}" {{if $item==$pageInfo.page}}class="current"{{/if}}>{{$item}}</a>
					{{/foreach}}
					{{if $pageInfo.page < $pageInfo.page_max}}
					<a href="http://{{$smarty.const.global_localhost}}/blog_maizi/blog/?page={{$pageInfo.page+1}}">下一页 &raquo;</a>
					{{/if}}
				</p>
				<p class="f-left"> {{$pageInfo.page}} / {{$pageInfo.page_max}} 页</p>
			</div> 
			{{/if}}
		</div> 
		<!-- 名人推荐 ，待完善，可以以后用户量增多后，根据签到数+发帖数综合评判-->
		{{include file='right.tpl'}}

	</div> <!-- /section -->
{{include file='footer.tpl'}}