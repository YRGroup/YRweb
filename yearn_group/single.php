<?php get_template_part('news_header')?>
    <div class="detail-mian">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>
 <div class="detail-head">
            <h4><?php the_title(); ?></h4>
            <div><?php the_time('Y-n-j'); ?></div>
        </div>
        <div class="detail-con">
            <?php the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );?>
        </div>
		<?php endwhile; ?>
       
    </div>
   <?php get_template_part('news_foot')?>	