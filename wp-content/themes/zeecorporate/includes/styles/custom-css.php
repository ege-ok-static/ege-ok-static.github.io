<?php 
add_action('wp_head', 'themezee_include_custom_css');
function themezee_include_custom_css() {
	
	echo '<style type="text/css">';
	$options = get_option('themezee_options');
	if ( $options['themeZee_stylesheet'] == "custom-color" ) {
		echo '
		a, a:link, a:visited,
		#sidebar ul li h2,
		#navi ul li.current_page_item a, #navi ul li.current-cat a, #navi ul li.current-menu-item a,
		#tabs_navi li a:hover, #tabs_navi li a:active, #tabs_navi li.ui-tabs-selected a,
		.post h2, .attachment h2, .post h2 a:link, .post h2 a:visited,
		#slideshow .post h2 a,
		.comment-author .fn, .comment-reply-link,
		.wp-pagenavi .current,
		#slide_keys a:link, #slide_keys a:visited,
		#twitter_div a:link, #twitter_div a:visited
		{
			color: #'.esc_attr($options['themeZee_color']).';
		}
		';
		}
	if ( $options['themeZee_custom_css'] <> "" ) { echo esc_attr($options['themeZee_custom_css']); }
	echo '</style>';
}
