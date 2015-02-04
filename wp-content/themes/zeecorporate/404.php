<?php get_header(); ?>

	<div id="content">

			<div class="type-page">
			
				<h2><?php _e('Ошибка 404: Не найдено', 'themezee_lang'); ?></h2>
				
				<div class="entry">
					<p><?php _e('К сожалению, по вашему запросу ничего не найдено.', 'themezee_lang'); ?></p>
					<?php get_search_form(); ?>
					
					<?php wp_reset_query(); ?> 
		
					<h2><?php _e('Новое на сайте', 'themezee_lang'); ?></h2><br/>
					<ul>
					
					<?php query_posts('post_type="post"&post_status="publish"&showposts=9'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
						<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?> 
					</ul>
					
					<h2><?php _e('Страницы', 'themezee_lang'); ?></h2><br/>
					<ul>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>
				
				
			</div>
			
	</div>
		
	<?php get_sidebar(); ?>
<?php get_footer(); ?>