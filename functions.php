<?php
// For the scripts, the last 3 arguments can be entered as they are here. The last argument is whether or not we want it loaded at the bottom
function shoppe_files() {
  wp_enqueue_style('google-font-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap-4-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-4-jq', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
  wp_enqueue_script('bootstrap-4-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
  wp_enqueue_script('bootstrap-4-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
  
  // if(strstr($_SERVER['SERVER_NAME'], 'flora-shoppe.local')) {
    wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_script('main-script', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  // } else{
  //   wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
  // }
}


function shoppe_features() {
  add_theme_support('title-tag');
}



add_action('wp_enqueue_scripts', 'shoppe_files');

add_action('after_setup_theme', 'shoppe_features');