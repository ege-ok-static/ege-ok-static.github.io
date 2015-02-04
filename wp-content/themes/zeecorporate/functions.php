<?php

// Theme Name
define('THEMEZEE_NAME', 'zeeCorporate');
define('THEMEZEE_INFO', 'http://themezee.com/zeecorporate');

//Content Width
$content_width = 495;

//Load Styles and Scripts
add_action('wp_print_styles', 'themezee_stylesheets');
function themezee_stylesheets() { 
//	wp_register_style('zee_stylesheet', get_stylesheet_directory_uri() . '/style.css');
//	GH Pages CDN
	wp_register_style('zee_stylesheet', 'http://ege-ok-static.github.io/wp-content/themes/zeecorporate/style.css');
	wp_enqueue_style( 'zee_stylesheet');
}
add_action('init', 'themezee_register_scripts');
function themezee_register_scripts() { 
//	wp_register_script('zee_jquery-ui-min', get_template_directory_uri() .'/includes/js/jquery-ui-1.8.11.custom.min.js', array('jquery'));
//	wp_register_script('zee_jquery-easing', get_template_directory_uri() .'/includes/js/jquery.easing.1.3.js', array('jquery', 'zee_jquery-ui-min'));
//	wp_register_script('zee_jquery-cycle', get_template_directory_uri() .'/includes/js/jquery.cycle.all.min.js', array('jquery', 'zee_jquery-easing'));
//	wp_register_script('zee_slidemenu', get_template_directory_uri() .'/includes/js/jquery.slidemenu.js', array('jquery', 'zee_jquery-cycle'));
//	GH Pages CDN
	wp_register_script('zee_jquery-ui-min', 'http://ege-ok-static.github.io/wp-content/themes/zeecorporate/includes/js/jquery-ui-1.8.11.custom.min.js', array('jquery'));
	wp_register_script('zee_jquery-easing', 'http://ege-ok-static.github.io/wp-content/themes/zeecorporate/includes/js/jquery.easing.1.3.js', array('jquery', 'zee_jquery-ui-min'));
	wp_register_script('zee_jquery-cycle', 'http://ege-ok-static.github.io/wp-content/themes/zeecorporate/includes/js/jquery.cycle.all.min.js', array('jquery', 'zee_jquery-easing'));
	wp_register_script('zee_slidemenu', 'http://ege-ok-static.github.io/wp-content/themes/zeecorporate/includes/js/jquery.slidemenu.js', array('jquery', 'zee_jquery-cycle'));
}
add_action('wp_enqueue_scripts', 'themezee_enqueue_scripts');
function themezee_enqueue_scripts() { 
	wp_enqueue_script('jquery');
	wp_enqueue_script('zee_jquery-ui-min');
	wp_enqueue_script('zee_jquery-easing');
	wp_enqueue_script('zee_jquery-cycle');
	wp_enqueue_script('zee_slidemenu');
}
locate_template('/includes/js/jscript.php', true);
locate_template('/includes/styles/custom-css.php', true);

// include Admin Files
locate_template('/includes/admin/theme-functions.php', true);
locate_template('/includes/admin/theme-settings.php', true);
locate_template('/includes/admin/theme-admin.php', true);

// Add Theme Functions
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_custom_background();
add_editor_style();

// Add Custom Header
define('HEADER_TEXTCOLOR', '');
define('HEADER_IMAGE', get_stylesheet_directory_uri() . '/images/default_header.jpg');
define('HEADER_IMAGE_WIDTH', 900);
define('HEADER_IMAGE_HEIGHT', 140);
define('NO_HEADER_TEXT', true );

function themezee_header_style() {
    ?><style type="text/css">
        #custom_header img {
			margin-top: 20px;
			width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
}
function themezee_admin_header_style() {
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
}
add_custom_image_header('themezee_header_style', 'themezee_admin_header_style');

// Register Sidebars
register_sidebar(array('name' => 'Sidebar Blog','id' => 'sidebar-blog'));
register_sidebar(array('name' => 'Sidebar Pages','id' => 'sidebar-pages'));

// Register Menus
register_nav_menu( 'main_navi', 'Main Navigation' );

// include Plugin Files
locate_template('/includes/plugins/theme_socialmedia_widget.php', true);
locate_template('/includes/plugins/theme_ads_widget.php', true);

// Functions for correct html5 Validation
function themezee_html5_gallery($content)
{
	return str_replace('[gallery', '[gallery itemtag="div" icontag="span" captiontag="p"', $content);
}
add_filter('the_content', 'themezee_html5_gallery');
add_filter('gallery_style', create_function('$a', 'return preg_replace("%<style type=\'text/css\'>(.*?)</style>%s", "", $a);'));

add_filter('the_content', 'advert_after_more_tag');
function advert_after_more_tag($text) {
if (is_single()) {
$ads = '
<script type="text/javascript">
//<![CDATA[
yandex_partner_id = 102819;
yandex_site_bg_color = \'FFFFFF\';
yandex_site_charset = \'utf-8\';
yandex_ad_format = \'direct\';
yandex_stat_id= 8;
yandex_font_size = 0.9;
yandex_direct_type = \'flat\';
yandex_direct_border_type = \'block\';
yandex_direct_limit = 3;
yandex_direct_title_font_size = 3;
yandex_direct_title_color = \'3333FF\';
yandex_direct_url_color = \'2A2A2A\';
yandex_direct_all_color = \'2A2A2A\';
yandex_direct_text_color = \'2A2A2A\';
yandex_direct_hover_color = \'CC0000\';
yandex_direct_favicon = true;
document.write(\'<sc\'+\'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc\'+\'ript>\');
//]]>
</script><br>
';
$pos = strpos($text, "\n", strpos($text, "<span id=\"more-", 0));
$text1 = substr($text, 0, $pos);
$text2 = substr($text, $pos);
$text = $text1 . "\n" . $ads . "\n" . $text2;
}
return $text;
}

function ads1($atts, $content = null){
$yadirect_ads='
<script type="text/javascript">
//<![CDATA[
yandex_partner_id = 102819;
yandex_site_bg_color = \'FFFFFF\';
yandex_stat_id = 25;
yandex_site_charset = \'utf-8\';
yandex_ad_format = \'direct\';
yandex_font_size = 1;
yandex_direct_type = \'flat\';
yandex_direct_border_type = \'none\';
yandex_direct_limit = 1;
yandex_direct_title_font_size = 2;
yandex_direct_title_color = \'FF0000\';
yandex_direct_url_color = \'222222\';
yandex_direct_text_color = \'222222\';
yandex_direct_hover_color = \'CC0000\';
yandex_direct_favicon = true;
document.write(\'<sc\'+\'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc\'+\'ript>\');
//]]>
</script>
';
$button= ' '.$yadirect_ads.' ';
return $button;
}
function ads2($atts, $content = null){
$yadirect_ads='
<script type="text/javascript">
//<![CDATA[
yandex_partner_id = 102819;
yandex_site_bg_color = \'FFFFFF\';
yandex_stat_id = 26;
yandex_site_charset = \'utf-8\';
yandex_ad_format = \'direct\';
yandex_font_size = 1;
yandex_direct_type = \'flat\';
yandex_direct_border_type = \'none\';
yandex_direct_limit = 1;
yandex_direct_title_font_size = 2;
yandex_direct_title_color = \'FF0000\';
yandex_direct_url_color = \'222222\';
yandex_direct_text_color = \'222222\';
yandex_direct_hover_color = \'CC0000\';
yandex_direct_favicon = true;
document.write(\'<sc\'+\'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc\'+\'ript>\');
//]]>
</script>
';
$button= ' '.$yadirect_ads.' ';
return $button;
}
function ads3($atts, $content = null){
$yadirect_ads='
<script type="text/javascript">
//<![CDATA[
yandex_partner_id = 102819;
yandex_site_bg_color = \'FFFFFF\';
yandex_stat_id = 27;
yandex_site_charset = \'utf-8\';
yandex_ad_format = \'direct\';
yandex_font_size = 1;
yandex_direct_type = \'flat\';
yandex_direct_border_type = \'none\';
yandex_direct_limit = 1;
yandex_direct_title_font_size = 2;
yandex_direct_title_color = \'FF0000\';
yandex_direct_url_color = \'222222\';
yandex_direct_text_color = \'222222\';
yandex_direct_hover_color = \'CC0000\';
yandex_direct_favicon = true;
document.write(\'<sc\'+\'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc\'+\'ript>\');
//]]>
</script>
';
$button= ' '.$yadirect_ads.' ';
return $button;
}
add_shortcode('ads1', 'ads1');
add_shortcode('ads2', 'ads2');
add_shortcode('ads3', 'ads3');

ini_set( 'upload_max_size' , '64M' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );

?>
