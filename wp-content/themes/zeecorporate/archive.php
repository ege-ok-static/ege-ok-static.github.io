<?php get_header(); ?>

		<div id="content">
		
		<?php if (is_category()) { ?><h2 class="arh"><?php _e('Рубрика:', 'themezee_lang'); ?> <?php echo single_cat_title(); ?></h2>
		<?php } elseif (is_date()) { ?><h2 class="arh"><?php _e('Архив за', 'themezee_lang'); ?> <?php the_time(get_option('date_format')); ?></h2>
		<?php } elseif (is_author()) { ?><h2 class="arh"><?php _e('Архив за', 'themezee_lang'); ?> <?php the_author(); ?></h2>
		<?php } elseif (is_tag()) { ?><h2 class="arh"><?php _e('Метка:', 'themezee_lang'); ?> <?php echo single_tag_title('', true); ?></h2>
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><h2 class="arh"><?php _e('Архивы', 'themezee_lang'); ?></h2><?php } ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="post_date">
					<span class="post_day"><a href="<?php the_permalink(); ?>"><?php the_time('d'); ?></a></span>
					<span class="post_year"><?php the_time('M Y'); ?> </span>
				</div>
				
				<div class="postmeta">
					<?php the_category(' &bull; ') ?>
				</div>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				
				<div class="clear"></div>
				
				<div class="entry">
					<?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>
					<?php the_content('<span class="moretext">' . __('Далее', 'themezee_lang') . '</span>'); ?>
					<div class="clear"></div>
					<?php wp_link_pages(); ?>
				</div>
				
				
				<div class="postinfo">
					<?php the_author(); ?> | 
					<a href="<?php the_permalink() ?>#comments"><?php comments_number(__('Ваш отзыв', 'themezee_lang'),__('Один отзыв','themezee_lang'),__('Отзывов (%)','themezee_lang')); ?></a>
					<?php if (get_the_tags()) echo ' | '; the_tags(__('Метки: ', 'themezee_lang'), ', '); ?>
					<?php edit_post_link(__( 'Править', 'themezee_lang' ), ' | '); ?>
				</div>

			</div>

		<?php endwhile; ?>
			
			
      
			<?php if(function_exists('wp_pagenavi')) { // if PageNavi is activated ?>
				<div class="more_posts">
					<?php wp_pagenavi(); ?>
				</div>
			<?php } else { // Otherwise, use traditional Navigation ?>
				<div class="more_posts">
					<span class="post_links"><?php next_posts_link(__('&laquo; Предыдущая страница', 'themezee_lang')) ?> &nbsp; <?php previous_posts_link (__('Следующая страница &raquo;', 'themezee_lang')) ?></span>
				</div>
			<?php }?>
			

		<?php endif; ?>
			
		</div>
		
	<?php get_sidebar(); ?>
<?php get_footer(); ?>