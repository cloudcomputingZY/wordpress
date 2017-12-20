<?php get_header(); ?>
<div id='box'>
        <div class='box-top'>
		<?php wz(); ?>
		<?php echo 'searching word:'.get_search_query(); ?>
        </div>
	 <div class='box-left'>
                        <?php if( have_posts() ){while(have_posts()){the_post();?>
                                <div class='blog'>
                                <div><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h2></div>
                                <div><?php the_content(); ?></div>
                                <div>
                                <?php _e( 'category' ); ?>：<?php the_category(','); ?><span>|</span>
                                <?php _e( 'author' ); ?>：<?php the_author(); ?><span>|</span>
                                <?php echo __( 'time'); ?>：<?php the_time( 'Y-m-d' ); ?>
                                <?php edit_post_link( __( 'Edit','cloudcomputingZY' ), ' <span>|</span> ', '' ); ?>
                                </div>
                                </div>
                        <?php }}
                        else{   echo 'no more post to show';} ?>
	<div><?php posts_nav_link(); ?></div>
        </div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

