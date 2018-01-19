	<?php get_template_part('news_header')?>	
    <div class="news-box">
        <div class="news-head headerImg"></div>
        <ul class="news-container">
				<?php if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>		
						<li>
						<a href="<?php the_permalink(); ?>">
							<div class="imgbox">
							<?php if ( has_post_thumbnail() ) : ?>
								 <?php the_post_thumbnail( 'thumbnail' ); ?>
							<?php else: ?>
								<img src="<?php echo get_first_image(); ?>" alt="<?php the_title();?>" class="news-imgbox">
							<?php endif; ?>
							</div>
							<div class="news-item">
								<h4><?php the_title();?></h4>
								<p><?php echo wp_trim_words($post->post_content, 66 );?></p>
								<div><?php the_time('Y-n-j'); ?></div>
							</div>
							<div class="news-more">
								<div><?php the_time('n-j'); ?></div>
								<div>more ></div>
							</div>
						</a>
						</li>	
					<?php endwhile; endif;?>
        </ul>
		<?php echo get_pagination();?>
    </div>
<?php get_template_part('news_foot')?>	

