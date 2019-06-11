<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function whisper_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Подвал №1', 'whisper' ),
		'id'            => 'widgeting-footer-1',
		'description'   => esc_html__( 'Добавьте необходимые виджеты в первую колонку в подвале.', 'whisper' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="ftco-heading-2">',
		'after_title'   => '</h2>',
	) );
register_sidebar( array(
		'name'          => esc_html__( 'Подвал №2', 'whisper' ),
		'id'            => 'widgeting-footer-2',
		'description'   => esc_html__( 'Добавьте необходимые виджеты во вторую колонку в подвале.', 'whisper' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="ftco-heading-2">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Подвал №3', 'whisper' ),
		'id'            => 'widgeting-footer-3',
		'description'   => esc_html__( 'Добавьте необходимые виджеты в третью колонку в подвале.', 'whisper' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="ftco-heading-2">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Подвал №4', 'whisper' ),
		'id'            => 'widgeting-footer-4',
		'description'   => esc_html__( 'Добавьте необходимые виджеты в четвертую колонку в подвале.', 'whisper' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="ftco-heading-2">',
		'after_title'   => '</h2>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'whisper' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Добавьте необходиме виджеты, что будут отображаться в боковой панели сайта.', 'whisper' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );













}















add_action( 'widgets_init', 'lawasf_widgets_init' );





?>