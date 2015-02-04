<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="description" content="Подготовка к ГИА и ЕГЭ по математике: алгоритмы решения всех типов задач, видеоуроки, видеолекции. Сайт репетитора по математике Фельдман Инны Владимировны. Профессиональные услуги репетитора по математике в Москве. " />
<meta name="keywords" content="Репетитор по математике, подготовка к ЕГЭ по математике, подготовка к ГИА, видеоурок, видеолекция, решение задач по математике />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<title><?php bloginfo('name'); if(is_home() || is_front_page()) { echo ' - '; bloginfo('description'); } else { wp_title(); } ?></title>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<script type="text/javascript">if (parent.frames.length > 0)top.location.replace(document.location);</script>


</head>
<body <?php body_class(); ?>>
<div id="wrapper">

	<div id="header">

			<div id="logo">
				<?php 
				$options = get_option('themezee_options');
				if ( isset($options['themeZee_logo']) and $options['themeZee_logo'] <> "" ) { ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($options['themeZee_logo']); ?>" alt="Logo" /></a>
				<?php } else { ?>
					<a href="<?php echo home_url(); ?>/"><h1><?php bloginfo('name'); ?></h1></a>
				<?php } ?>
			</div>
			<div id="navi">
				<?php 
					// Get Top Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'main_navi', 'container' => false, 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
				?>
			</div>
	</div>
	<div class="clear"></div>
	
	<?php if( get_header_image() != '' ) : ?>
	<div id="custom_header">
		<img src="<?php echo get_header_image(); ?>" />
	</div>
	<?php endif; ?>
	
	<div id="wrap">