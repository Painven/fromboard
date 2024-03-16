<?php 

/* START ADD SVG SUPPORT */
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
/* END ADD SVG SUPPORT */

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