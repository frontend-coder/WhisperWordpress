<?php
// регистрация дргугого типа записи - практика
add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('practice', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Практика', // основное название для типа записи
			'singular_name'      => 'Практика', // название для одной записи этого типа
			'add_new'            => 'Добавить область деятельности в перечень практики', // для добавления новой записи
			'add_new_item'       => 'Добавление области деятельности в перечень практики', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование область деятельности в перечень практики', // для редактирования типа записи
			'new_item'           => 'Новая область деятельности в перечене практики', // текст новой записи
			'view_item'          => 'Смотреть область деятельности в перечене практики', // для просмотра записи этого типа.
			'search_items'       => 'Искать область деятельности в перечене практики', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Практика деятельности', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-images-alt2',
		// dashicons-admin-users
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title',
		'editor',
		'thumbnail',
		'excerpt' ), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
	//	'taxonomies'          => array('category','post_tag'),
		'has_archive'         => false,
		// 'rewrite'             => array(
		// 	'slug'=>'deal-practis',
		// 	'hierarchical'=>false,
		// 	'with_front'=>false,
		// 	'feed'=>false ),

		'query_var'           => true,
	) );
}








// // регистрация дргугого типа записи - Counseling
// add_action('init', 'register_post_types1');
// function register_post_types1(){
// 	register_post_type('counseling', array(
// 		'label'  => null,
// 		'labels' => array(
// 			'name'               => 'Консультирование', // основное название для типа записи
// 			'singular_name'      => 'Консультирование', // название для одной записи этого типа
// 			'add_new'            => 'Добавить область Консультирование в перечень услуг', // для добавления новой записи
// 			'add_new_item'       => 'Добавление области Консультирование в перечень услуг', // заголовка у вновь создаваемой записи в админ-панели.
// 			'edit_item'          => 'Редактирование область Консультирование в перечень услуг', // для редактирования типа записи
// 			'new_item'           => 'Новая область Консультирование в перечне услуг', // текст новой записи
// 			'view_item'          => 'Смотреть область Консультирование в перечне услуг', // для просмотра записи этого типа.
// 			'search_items'       => 'Искать область Консультирование в перечне услуг', // для поиска по этим типам записи
// 			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
// 			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
// 			'parent_item_colon'  => '', // для родителей (у древовидных типов)
// 			'menu_name'          => 'Консультирование', // название меню
// 		),
// 		'description'         => '',
// 		'public'              => true,
// 		'publicly_queryable'  => true, // зависит от public
// 		'exclude_from_search' => true, // зависит от public
// 		'show_ui'             => true, // зависит от public
// 		'show_in_menu'        => true, // показывать ли в меню адмнки
// 		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
// 		'show_in_nav_menus'   => true, // зависит от public
// 		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
// 		'rest_base'           => null, // $post_type. C WP 4.7
// 		'menu_position'       => 5,
// 		'menu_icon'           => 'dashicons dashicons-book',
// 		// dashicons-admin-users
// 		//'capability_type'   => 'post',
// 		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
// 		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
// 		'hierarchical'        => false,
// 		'supports'            => array(
// 		'title',
// 	'editor',
// 		'thumbnail',
// 	//	'excerpt'
// 		 ),
// 		'taxonomies'          => array(),
// 		'has_archive'         => false,
// 		'rewrite'             => array(
// 			'slug'=>'deal-counseling',
// 			'hierarchical'=>false,
// 			'with_front'=>false,
// 			'feed'=>false ),

// 		'query_var'           => true,
// 	) );
// }
// конец записи - дргугого типа записи - Counseling

// регистрация дргугого типа записи - Testimonials
// add_action('init', 'register_post_types2');
// function register_post_types2(){
// 	register_post_type('testimonials', array(
// 		'label'  => null,
// 		'labels' => array(
// 			'name'               => 'Отзывы', // основное название для типа записи
// 			'singular_name'      => 'Отзыв', // название для одной записи этого типа
// 			'add_new'            => 'Добавить Отзыв', // для добавления новой записи
// 			'add_new_item'       => 'Добавить Отзыв', // заголовка у вновь создаваемой записи в админ-панели.
// 			'edit_item'          => 'Редактировать Отзыв', // для редактирования типа записи
// 			'new_item'           => 'Новый Отзыв', // текст новой записи
// 			'view_item'          => 'Просмотреть Отзыв', // для просмотра записи этого типа.
// 			'search_items'       => 'Искать необходимый Отзыв', // для поиска по этим типам записи
// 			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
// 			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
// 			'parent_item_colon'  => '', // для родителей (у древовидных типов)
// 			'menu_name'          => 'Отзывы', // название меню
// 		),
// 		'description'         => '',
// 		'public'              => true,
// 		'publicly_queryable'  => true, // зависит от public
// 		'exclude_from_search' => true, // зависит от public
// 		'show_ui'             => true, // зависит от public
// 		'show_in_menu'        => true, // показывать ли в меню адмнки
// 		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
// 		'show_in_nav_menus'   => true, // зависит от public
// 		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
// 		'rest_base'           => null, // $post_type. C WP 4.7
// 		'menu_position'       => 6,
// 		'menu_icon'           => 'dashicons dashicons-groups',
// 		// dashicons-admin-users
// 		//'capability_type'   => 'post',
// 		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
// 		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
// 		'hierarchical'        => false,
// 		'supports'            => array(
// 		'title',
// 		'editor',
// 		'thumbnail',
// 		'excerpt'
// 		 ),
// 		'taxonomies'          => array(),
// 		'has_archive'         => false,
// 		'rewrite'             => array(
// 			'slug'=>'deal-testimonials',
// 			'hierarchical'=>false,
// 			'with_front'=>false,
// 			'feed'=>false ),

// 		'query_var'           => true,
// 	) );
// }

// регистрация дргугого типа записи - attorneys
// add_action('init', 'register_post_types3');
// function register_post_types3(){
// 	register_post_type('attorneys', array(
// 		'label'  => null,
// 		'labels' => array(
// 			'name'               => 'Адвокаты', // основное название для типа записи
// 			'singular_name'      => 'Адвокат', // название для одной записи этого типа
// 			'add_new'            => 'Добавить Адвоката', // для добавления новой записи
// 			'add_new_item'       => 'Добавить Адвоката', // заголовка у вновь создаваемой записи в админ-панели.
// 			'edit_item'          => 'Редактировать Адвоката', // для редактирования типа записи
// 			'new_item'           => 'Новый Адвокат', // текст новой записи
// 			'view_item'          => 'Просмотреть Адвоката', // для просмотра записи этого типа.
// 			'search_items'       => 'Искать необходимый Адвоката', // для поиска по этим типам записи
// 			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
// 			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
// 			'parent_item_colon'  => '', // для родителей (у древовидных типов)
// 			'menu_name'          => 'Адвокаты', // название меню
// 		),
// 		'description'         => '',
// 		'public'              => true,
// 		'publicly_queryable'  => true, // зависит от public
// 		'exclude_from_search' => true, // зависит от public
// 		'show_ui'             => true, // зависит от public
// 		'show_in_menu'        => true, // показывать ли в меню адмнки
// 		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
// 		'show_in_nav_menus'   => true, // зависит от public
// 		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
// 		'rest_base'           => null, // $post_type. C WP 4.7
// 		'menu_position'       => 7,
// 		'menu_icon'           => 'dashicons dashicons-businessperson',
// 		// dashicons-admin-users
// 		//'capability_type'   => 'post',
// 		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
// 		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
// 		'hierarchical'        => false,
// 		'supports'            => array(
// 		'title',
// 	'editor',
// 		'thumbnail',
// 		'excerpt'
// 		 ),
// 		'taxonomies'          => array(),
// 		'has_archive'         => false,
// 		'rewrite'             => array(
// 			'slug'=>'deal-attorneys',
// 			'hierarchical'=>false,
// 			'with_front'=>false,
// 			'feed'=>false ),

// 		'query_var'           => true,
// 	) );
// }

?>