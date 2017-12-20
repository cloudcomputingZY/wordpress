<?php
	//注册一个小工具
	register_sidebar(
		array(
			'name'          => 'sidebar' ,
			'before_widget' => '<div class="box-right">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		)
	);

	function wz()  //显示面包屑的效果
	{
		if( !is_home() ){ ?>
		<div class="wz">
			<p><a href="<?php bloginfo('url'); ?>">home page</a> >
			<?php
			  if( is_category() ) { single_cat_title(); }
			  elseif ( is_search() ) {  echo $s; }
			  elseif ( is_single() ) { 
			  	  $cat = get_the_category();
			  	  $cat = $cat[0];
			  	  echo '<a href="' . get_category_link( $cat ) . '">' . $cat->name . '</a> > content';
			  }
			  elseif ( is_page() ) { the_title(); }
			  elseif ( is_404() ) { echo '404 Not found'; }
			?></p>
		</div>
		<?php }
	}

?>

