<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}


/** Enqueue des scripts **/
function load_scripts() {
    wp_enqueue_style( 'swiperJS', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css', array(), '11.0.5', true );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true );
    wp_enqueue_script( 'swiperJS', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', array('jquery'), '11.0.5', true );

	wp_dequeue_script( 'foce-navigation' ); // dequeue parent theme navigation 
	wp_enqueue_script( 'foce-navigation', get_stylesheet_directory_uri() . '/assets/js/navigation_child.js', array(), _S_VERSION, true ); // enqueue child theme navigation 

    //wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery', 'swiperJS'), '1.1.0', true );
    wp_enqueue_script( 'scriptsMinJs', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js' , array('jquery', 'swiperJS'), '1.1.0', true ); // main scripts.min.js
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


