<?php

add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_footer', 'enqueue_scripts' );

/**
 * Remove ninja form stylesheets
 */
function wpgood_nf_display_enqueue_scripts(){
    wp_dequeue_style( 'nf-display' );
}
add_action( 'nf_display_enqueue_scripts', 'wpgood_nf_display_enqueue_scripts');

// Change Sub-Menu class name
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"submenu fadeOutDownSmall animated fast\">\n";
    }
}

function enqueue_styles() {
    // load styles
    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Nunito:300,600%7CCaveat+Brush%7CMontserrat&amp;subset=latin-ext', '', NULL);
    wp_enqueue_style( 'site_styles', THEME_URL .'/style.css', '', NULL);
}

function enqueue_scripts() {
    // load scripts
    wp_enqueue_script("jquery");
    wp_enqueue_script( 'google_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA6i3NZr6j8WT8L6YLFEZaq1_b-xUFcDLk' , '', NULL);
    wp_enqueue_script( 'site_scripts', THEME_URL . '/assets/js/main.min.js', '', NULL);
}
