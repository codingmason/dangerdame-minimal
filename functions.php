<?php

// Add scripts and stylesheets
function startwordpress_scripts() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'back-to-top', get_template_directory_uri() . '/js/back-to-top.js' );
  wp_enqueue_script( 'menu-slideout', get_template_directory_uri() . '/js/menu-slideout.js' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
