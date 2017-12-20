<?php get_header(); ?>
<div id='box'>
        <div class='box-top'>
                <?php wz(); ?>
        </div>
	 <div class='box-left'>
                        <?php if( have_posts() ){ the_post();?>
                                <div class='blog'>
                                <div><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h2></div>
                                <div><?php the_content(); ?></div>
                                </div>
                        <?php }
                        else{   echo 'no more post to show';} ?>
	<?php comments_template() ;?>
        </div>
	<?php get_sidebar() ; ?>
</div>
<?php get_footer(); ?>

