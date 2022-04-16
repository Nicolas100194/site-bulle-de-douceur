<?php

function disable_gutenberg_editor(){
    return false;
}

function themenicolas_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

}

function themenicolas_register_assets(){
    wp_enqueue_style('nicolastheme-css', get_stylesheet_directory_uri().'/assets/sass/main.css');
}


add_action('after_setup_theme','themenicolas_supports');
add_action('wp_enqueue_scripts', 'themenicolas_register_assets');
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
