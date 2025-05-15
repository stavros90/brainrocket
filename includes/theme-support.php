<?php 

// Theme supports
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', [ 'gallery', 'caption', 'style', 'script' ] );

// Register Image Sizes 
add_image_size( 'article-grid', 358, 259, true );