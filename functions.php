<?php

function gibsons_files() {
  wp_enqueue_script( 'gibsons_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', false );
  wp_enqueue_style( 'gibsons_main_styles', get_theme_file_uri('main.css') );
  wp_enqueue_style( 'gibsons_styles', get_theme_file_uri('style.css') );
}

add_action( 'wp_enqueue_scripts', 'gibsons_files');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function gibson_theme_menus() {
  register_nav_menus(
    array(
      'header-menu'  =>  'Header Menu',
      'footer-menu'  =>  'Footer Menu'
    )
    );
}
add_action( 'init', 'gibson_theme_menus' );

function add_comment_to_body_open() {
printf( "<!-- THIS SHOULD RENDER AFTER THE BODY TAG OPENS --" );
}
add_action( 'wp_body_open', 'add_comment_to_body_open' );



function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );