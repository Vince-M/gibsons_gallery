<?php

function gibsons_files() {
  wp_enqueue_style('gibsons_main_styles', get_theme_file_uri('main.css'));
}

add_action( 'wp_enqueue_scripts', 'gibsons_files');