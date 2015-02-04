<?php get_header(); ?>

		<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="post_date">
					<span class="post_day"><a href="<?php the_permalink(); ?>"><?php the_time('d'); ?></a></span>
					<span class="post_year"><?php the_time('M Y'); ?> </span>
				</div>
				
				<div class="postmeta">
					<?php the_category(' &bull; ') ?>
				</div>
				<h2><?php the_title(); ?></h2>
				
				<div class="clear"></div><br />
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
					<!-- <?php trackback_rdf(); ?> -->
				</div>
				
				
				




<h3>Другие записи из категории "<?php the_category(', ') ?>":</h3>
<?php
function show_previous_posts_from_category ($the_post_id, $the_category_id = 0, $post_num) {
 
$num = 0;
global $wpdb;
 
$sql = "SELECT wposts.*
FROM $wpdb->posts wposts
LEFT JOIN $wpdb->term_relationships ON (wposts.ID = $wpdb->term_relationships.object_id)
LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
WHERE $wpdb->term_taxonomy.taxonomy = 'category'
AND $wpdb->term_taxonomy.term_id = '$the_category_id'
AND wposts.post_status = 'publish'
AND wposts.post_type = 'post'
AND wposts.ID < '$the_post_id'
ORDER BY wposts.ID DESC
LIMIT $post_num";
 
$result = $wpdb->get_results($sql, OBJECT);
global $post;
?>
<ul>
<?php
foreach ($result as $post) {
setup_postdata($post);
?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php
$num++;
$save_ids[] = $post->ID;
}
if ( $num < $post_num || !$result ) {
$need_more = $post_num-$num;
$save_ids[] = $the_post_id;
$save_ids = join (',', $save_ids);
$more_posts = get_posts("numberposts=$need_more&category=$the_category_id&exclude=$save_ids");
foreach ($more_posts as $post){
setup_postdata($post);
?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php
}
}
?>
</ul>
<?php } ?>
 
<?php
$the_cat = get_the_category();
$the_cat_id = $the_cat[0]->cat_ID;
show_previous_posts_from_category($post->ID, $the_cat_id, 10);
wp_reset_query();
?>

<div></div>


<div class="postinfo">

					<?php the_author(); ?> | 
					<a href="<?php the_permalink() ?>#comments"><?php comments_number(__('Ваш отзыв', 'themezee_lang'),__('Один отзыв','themezee_lang'),__('Отзывов (%)','themezee_lang')); ?></a>
					<?php if (get_the_tags()) echo ' | '; the_tags(__('Метки: ', 'themezee_lang'), ', '); ?>
					<?php edit_post_link(__( 'Править', 'themezee_lang' ), ' | '); ?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php endif; ?>
			
		<?php comments_template(); ?>
		
		</div>
		
	<?php get_sidebar(); ?>
<?php get_footer(); ?>	