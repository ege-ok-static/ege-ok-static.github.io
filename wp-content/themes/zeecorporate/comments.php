<?php 
	
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required()) { ?>
		<p><?php _e('Пожалуйста, введите пароль для просмотра комментариев.', 'themezee_lang'); ?></p>
	<?php return; } ?>
	

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

<div id="comments">
	<h3 id="comment_head"><?php comments_number(__('Отзывов нет', 'themezee_lang'),__('Один отзыв','themezee_lang'),__('Отзывов (%)','themezee_lang') );?></h3>

	<?php if ( get_comment_pages_count() > 1 ) : ?>
	<div class="comment_navi">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
	<div class="clear"></div>
	<?php endif; ?>
	
	<ol class="commentlist">
	<?php wp_list_comments( array('avatar_size' => 48)); ?>
	</ol>

	<div class="comment_navi">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
	<div class="clear"></div>
</div>
 <?php else : ?>

	<?php if ( ! comments_open() and !is_page() ) : ?>
		<p class="nocomments"><?php _e('Обсуждение закрыто.', 'themezee_lang'); ?></p>
	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
	<?php comment_form(); ?>
	<div class="clear"></div>
<?php endif; ?>
