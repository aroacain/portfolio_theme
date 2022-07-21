<?php

function ourtheme_files() {
    // Google Fonts
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // Font Awesome
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // Compiled js and css files
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('our-main-styles-vendor', get_theme_file_uri('/build/index.css'));
    }


add_action('wp_enqueue_scripts', 'ourtheme_files');

function ourtheme_features() {
    // Title tag
    add_theme_support('title-tag');
    // Footer locations
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationLeft', 'Footer Location Left');
    register_nav_menu('footerLocationRight', 'Footer Location Right');
    }

add_action('after_setup_theme', 'ourtheme_features');