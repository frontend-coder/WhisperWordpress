<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки шапки',
		'menu_title'	=> 'Шапка',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки подвала',
		'menu_title'	=> 'Подвал',
		'parent_slug'	=> 'theme-general-settings',
	));
acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки формы подписки',
		'menu_title'	=> 'Подписка',
		'parent_slug'	=> 'theme-general-settings',
	));
acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки названия блока в одиночных статьях',
		'menu_title'	=> 'Юристконсульты',
		'parent_slug'	=> 'theme-general-settings',
	));
acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки страницы 404',
		'menu_title'	=> '404',
		'parent_slug'	=> 'theme-general-settings',
	));


}

?>