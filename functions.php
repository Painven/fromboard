<?php 

add_action( 'after_setup_theme', function(){

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );

	// возможность изменять изображения в шапке из админки
	add_theme_support( 'custom-header' );

	// включаем меню в админке
	add_theme_support( 'menus' );

	// создание метатега <title> через хук
	add_theme_support( 'title-tag' );

	// возможность загрузить картинку логотипа в админке
	add_theme_support( 'custom-logo', [
		'height'      => 190,
		'width'       => 190,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
});

add_action( 'wp_enqueue_scripts', function() {
    //head stylesheets
    wp_enqueue_style( 'lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css');
    wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );

    //footer scripts
    wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
    wp_enqueue_script( 'lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js');
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js');
});