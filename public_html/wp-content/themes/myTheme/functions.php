<?php

remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wlwmaniftst_link');
remove_action ('wp_head', 'wp_generator');

show_admin_bar(false);

function logo_widget_init() {

	register_sidebar( array(
		'name'          => 'Логотип SVG',
		'id'            => 'logo',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'logo_widget_init' );

require_once (get_stylesheet_directory() . '/theme-options.php' );

add_theme_support('post-thumbnails');

function socials_widget_init() {

	register_sidebar( array(
		'name'          => 'Социальные иконки',
		'id'            => 'socials',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'socials_widget_init' );


function adjust_image_sizes_attr( $sizes, $size ) {
   $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
   return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );



?>