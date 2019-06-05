<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lawasf_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Подвал №1', 'lawasf' ),
		'id'            => 'widgeting-footer-1',
		'description'   => esc_html__( 'Добавьте необходимые виджеты в первую колонку в подвале.', 'lawasf' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
register_sidebar( array(
		'name'          => esc_html__( 'Подвал №2', 'lawasf' ),
		'id'            => 'widgeting-footer-2',
		'description'   => esc_html__( 'Добавьте необходимые виджеты во вторую колонку в подвале.', 'lawasf' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Подвал №3', 'lawasf' ),
		'id'            => 'widgeting-footer-3',
		'description'   => esc_html__( 'Добавьте необходимые виджеты в третью колонку в подвале.', 'lawasf' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Подвал №4', 'lawasf' ),
		'id'            => 'widgeting-footer-4',
		'description'   => esc_html__( 'Добавьте необходимые виджеты в четвертую колонку в подвале.', 'lawasf' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}















add_action( 'widgets_init', 'lawasf_widgets_init' );





?>