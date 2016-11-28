<?php

// Add scripts and stylesheets
function startwordpress_scripts() {
 
  // Add custom CSS
  wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'style');

  // Add JQuery
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
  wp_enqueue_script('jquery');

  // Add custom Javascript
  wp_register_script( 'back-to-top', get_template_directory_uri() . '/js/back-to-top.js', array('jquery'), '', true );
  wp_enqueue_script( 'back-to-top');

  wp_register_script( 'menu-slideout', get_template_directory_uri() . '/js/menu-slideout.js', array('jquery'), '', true );
  wp_enqueue_script( 'menu-slideout');  
  
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );


// WordPress Titles
add_theme_support( 'title-tag' );