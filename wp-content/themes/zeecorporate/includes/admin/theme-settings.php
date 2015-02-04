<?php
	
	function themezee_get_sections() {
		$themezee_sections = array();
		
		$themezee_sections[] = array("id" => "themeZee_main",
					"name" => __('Настройки темы', 'themezee_lang'));
					
		$themezee_sections[] = array("id" => "themeZee_slider",
					"name" => __('Слайдер', 'themezee_lang'));
					
		$themezee_sections[] = array("id" => "themeZee_buttons",
					"name" => __('Социальные кнопки', 'themezee_lang'));
					
		$themezee_sections[] = array("id" => "themeZee_banner",
					"name" => __('Реклама 125x125', 'themezee_lang'));
		return $themezee_sections;
	}
	
	function themezee_get_settings() {
	
		$color_styles = array(
			'blue.css' => __('Голубая', 'themezee_lang'),
			'brown.css' => __('Коричневая', 'themezee_lang'),
			'darkblue.css' => __('Темно-синяя', 'themezee_lang'),
			'darkgreen.css' => __('Темно-зеленая', 'themezee_lang'),
			'grey.css' => __('Серая', 'themezee_lang'),
			'orange.css' => __('Оранжевая', 'themezee_lang'),
			'purple.css' => __('Фиолетовая', 'themezee_lang'),
			'red.css' => __('Красная', 'themezee_lang'),
			'standard.css' => __('Светло-зеленая', 'themezee_lang'),
			'custom-color' => __('Мой цвет', 'themezee_lang'));

		$default_logo =  get_template_directory_uri() . '/images/logo.png';
		$default_banner = get_template_directory_uri() . '/images/ad_125x125.png';
		
		$themezee_settings = array();
	
		### MAIN SETTINGS
		#######################################################################################
		$themezee_settings[] = array("name" => "Лого",
						"desc" => __('Введите полный адрес, по которому находится ваш логотип.', 'themezee_lang'),
						"id" => "themeZee_logo",
						"std" => $default_logo,
						"type" => "logo",
						"section" => "themeZee_main");	
								
		$themezee_settings[] = array("name" => __('Текст в нижней части', 'themezee_lang'),
						"desc" => __('Введите текст, который вы хотите поместить в самом низу сайта.', 'themezee_lang'),
						"id" => "themeZee_footer",
						"std" => "Ваш текст здесь",
						"type" => "textarea",
						"section" => "themeZee_main");
							
		$themezee_settings[] = array("name" => "Стиль темы",
						"desc" => __('Выберите цветовую схему сайта.', 'themezee_lang'),
						"id" => "themeZee_stylesheet",
						"std" => "standard.css",
						"type" => "select",
						'choices' => $color_styles,
						"section" => "themeZee_main"
						);
		
		$themezee_settings[] = array("name" => __('Мой цвет', 'themezee_lang'),
						"desc" => __("Укажите собственный цвет здесь (Вы должны выбрать опцию Мой цвет выше).", 'themezee_lang'),
						"id" => "themeZee_color",
						"std" => "000000",
						"type" => "colorpicker",
						"section" => "themeZee_main");

		$themezee_settings[] = array("name" => __('Ваш CSS', 'themezee_lang'),
						"desc" => __('Вы можете добавить свой собственный css-код здесь.', 'themezee_lang'),
						"id" => "themeZee_custom_css",
						"std" => "",
						"type" => "textarea",
						"section" => "themeZee_main");
						
		### POST SLIDER SETTINGS
		#######################################################################################
		$themezee_settings[] = array("name" => __('Показывать слайдер?', 'themezee_lang'),
						"desc" => __('Отметьте, если вы хотите показывать слайдер на главной странице.', 'themezee_lang'),
						"id" => "themeZee_show_slider",
						"std" => "false",
						"type" => "checkbox",
						"section" => "themeZee_slider");
						
		$themezee_settings[] = array("name" => __('Заголовок слайдера', 'themezee_lang'),
						"desc" => __('Введите текст, который будет показан перед слайдером.', 'themezee_lang'),
						"id" => "themeZee_slider_title",
						"std" => "Рекомендуем",
						"type" => "text",
						"section" => "themeZee_slider");
						
		$themezee_settings[] = array("name" => "Эффекты слайдера",
						"desc" => "",
						"id" => "themeZee_slider_mode",
						"std" => "0",
						"type" => "radio",
						'choices' => array(
									0 => 'Горизонтальный',
									1 => 'Вертикальный',
									2 => 'Затухание'),
						"section" => "themeZee_slider"
						);

		$themezee_settings[] = array("name" => __('Содержание слайдера', 'themezee_lang'),
						"desc" => "",
						"id" => "themeZee_slider_content",
						"std" => "0",
						"type" => "radio",
						'choices' => array(
									0 => __('Показывать новые публикации', 'themezee_lang'),
									1 => __('Показывать публикации из рубрики "featured"', 'themezee_lang'),
									2 => __('Показывать публикации с ключем произвольного поля "featured"', 'themezee_lang'),
									3 => __('Показывать публикации из выбранной рубрики (введите ID ниже)', 'themezee_lang')),
						"section" => "themeZee_slider"
						);
						
		$themezee_settings[] = array("name" => __('ID рубрики', 'themezee_lang'),
						"desc" => __("Введите ID (номер) рубрики, публикации из которой вы хотите показать в слайдшоу (Вы должны выбрать соответствующую опцию выше).", 'themezee_lang'),
						"id" => "themeZee_slider_cat",
						"std" => "1",
						"type" => "text",
						"section" => "themeZee_slider");

		$themezee_settings[] = array("name" => __('Количество публикаций', 'themezee_lang'),
						"desc" => __('Введите количество публикаций которые должны быть показаны в слайдере.', 'themezee_lang'),
						"id" => "themeZee_slider_limit",
						"std" => "5",
						"type" => "text",
						"section" => "themeZee_slider");
		
		### SOCIALMEDIA BUTTONS SETTINGS
		#######################################################################################

		$themezee_settings[] = array("name" => __('Активировать кнопки социальных медиа?', 'themezee_lang'),
						"desc" => __('Отметьте, если хотите активировать виджет социальных кнопок.', 'themezee_lang'),
						"id" => "themeZee_socialmedia_widget",
						"std" => "false",
						"type" => "checkbox",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "Ссылка RSS",
						"desc" => __('Введите адрес вашей RSS-ленты (например, Feedburner).', 'themezee_lang'),
						"id" => "themeZee_rss",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Подписка по E-mail",
						"desc" => __('Введите адрес подписки по E-mail (например, используйте сервис подписки по E-mail от Feedburner).', 'themezee_lang'),
						"id" => "themeZee_email",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Twitter",
						"desc" => __('Введите адрес вашего профиля Twitter.', 'themezee_lang'),
						"id" => "themeZee_twitter",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Facebook",
						"desc" => __('Введите адрес вашего профиля Facebook.', 'themezee_lang'),
						"id" => "themeZee_facebook",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Google+",
						"desc" => __('Введите адрес вашего профиля Google+.', 'themezee_lang'),
						"id" => "themeZee_googleplus",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Tumblr",
						"desc" => __('Введите адрес вашего профиля Tumblr.', 'themezee_lang'),
						"id" => "themeZee_tumblr",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "LinkedIn",
						"desc" => __('Введите адрес вашего профиля LinkedIn.', 'themezee_lang'),
						"id" => "themeZee_linkedin",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "Xing",
						"desc" => __('Введите адрес вашего профиля Xing.', 'themezee_lang'),
						"id" => "themeZee_xing",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "Delicious",
						"desc" => __('Введите адрес вашего профиля Delicious.', 'themezee_lang'),
						"id" => "themeZee_delicious",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Digg",
						"desc" => __('Введите адрес вашего профиля Digg.', 'themezee_lang'),
						"id" => "themeZee_digg",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Flickr",
						"desc" => __('Введите адрес вашего профиля Flickr.', 'themezee_lang'),
						"id" => "themeZee_flickr",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "Youtube",
						"desc" => __('Введите адрес вашего профиля Youtube.', 'themezee_lang'),
						"id" => "themeZee_youtube",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Vimeo",
						"desc" => __('Введите адрес вашего профиля Vimeo.', 'themezee_lang'),
						"id" => "themeZee_vimeo",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		### 125x125 Banner SETTINGS
		#######################################################################################	
		
		$themezee_settings[] = array("name" => __('Ротировать баннеры?', 'themezee_lang'),
						"desc" => __('Отметьте, если хотите менять баннеры 125х125 местами в случайном порядке.', 'themezee_lang'),
						"id" => "themeZee_rotate",
						"std" => "false",
						"type" => "checkbox",
						"section" => "themeZee_banner");	

		$themezee_settings[] = array("name" => __('Введите адрес изображения баннера', 'themezee_lang') . ' #1',
						"desc" => __('Укажите адрес, по которому расположено изображение для вашего баннера.', 'themezee_lang'),
						"id" => "themeZee_ad_image_1",
						"std" => $default_banner,
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" =>  __('Введите адрес, куда ведет баннер', 'themezee_lang') . ' #1',
						"desc" => __('Укажите адрес, по которому переходит пользователь при клике на баннер.', 'themezee_lang'),
						"id" => "themeZee_ad_url_1",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Введите адрес изображения баннера', 'themezee_lang') . ' #2',
						"desc" => "",
						"id" => "themeZee_ad_image_2",
						"std" => $default_banner,
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Введите адрес, куда ведет баннер', 'themezee_lang') . ' #2',
						"desc" => "",
						"id" => "themeZee_ad_url_2",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Введите адрес изображения баннера', 'themezee_lang') . ' #3',
						"desc" => "",
						"id" => "themeZee_ad_image_3",
						"std" => $default_banner,
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Введите адрес, куда ведет баннер', 'themezee_lang') . ' #3',
						"desc" => "",
						"id" => "themeZee_ad_url_3",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Введите адрес изображения баннера', 'themezee_lang') . ' #4',
						"desc" => "",
						"id" => "themeZee_ad_image_4",
						"std" => $default_banner,
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Введите адрес, куда ведет баннер', 'themezee_lang') . ' #4',
						"desc" => "",
						"id" => "themeZee_ad_url_4",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Введите адрес изображения баннера', 'themezee_lang') . ' #5',
						"desc" => "",
						"id" => "themeZee_ad_image_5",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Введите адрес, куда ведет баннер', 'themezee_lang') . ' #5',
						"desc" => "",
						"id" => "themeZee_ad_url_5",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Введите адрес изображения баннера', 'themezee_lang') . ' #6',
						"desc" => "",
						"id" => "themeZee_ad_image_6",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Введите адрес, куда ведет баннер', 'themezee_lang') . ' #6',
						"desc" => "",
						"id" => "themeZee_ad_url_6",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");
						
		return $themezee_settings;
	}

?>