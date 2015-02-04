<?php get_header(); ?>

	<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<h2><?php the_title(); ?></h2>
				<?php edit_post_link(__( 'Править', 'themezee_lang' )); ?>				
				<div class="entry">
<strong><script type="text/javascript">
//<![CDATA[
yandex_partner_id = 102819;
yandex_site_bg_color = 'FFFFFF';
yandex_site_charset = 'utf-8';
yandex_ad_format = 'direct';
yandex_stat_id= 3;
yandex_font_size = 0.9;
yandex_direct_type = 'flat';
yandex_direct_border_type = 'block';
yandex_direct_limit = 1;
yandex_direct_title_font_size = 3;
yandex_direct_title_color = '3333FF';
yandex_direct_url_color = '2A2A2A';
yandex_direct_all_color = '2A2A2A';
yandex_direct_text_color = '2A2A2A';
yandex_direct_hover_color = 'CC0000';
yandex_direct_favicon = true;
document.write('<sc'+'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc'+'ript>');
//]]>
</script></strong>
					<?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
					<?php the_content(); ?>
					<div class="clear"></div>
					<?php wp_link_pages(); ?>
					
				</div>
				
			</div>

		<?php endwhile; ?>

		<?php endif; ?>
		
		<?php comments_template(); ?>
		
	</div>
		
	<?php get_sidebar(); ?>
<?php get_footer(); ?>	