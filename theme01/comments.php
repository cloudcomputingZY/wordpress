<div class='blog'>
	<h3>评论</h3>
	<ol class="commentlist">
		<?php if ( !comments_open() ) { ?>
			<li><p>评论功能已经关闭!</p></li>
		<?php } else { ?> 
			<?php if ( !have_comments() ) { ?>
				<li><p><a href="#respond">还没有任何评论，你来说两句吧</a></p></li>
			<?php } else { wp_list_comments(); }
		comment_form();
		 }?>
	</ol>
</div>
