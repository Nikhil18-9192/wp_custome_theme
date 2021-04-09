 <?php

// set dynamic title
function theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

// includes css files
add_action('after_setup_theme', 'theme_support' );

 function include_styles(){
   wp_enqueue_style('main-styles', get_template_directory_uri(). '/style.css', array(), '1.0', 'all');
 }

  add_action('wp_enqueue_scripts', 'include_styles');


  //includes all js files
  function include_scripts(){
    wp_enqueue_script('main-script', get_template_directory_uri(). '/assets/js/main.js', array(), '1.0', true);
  }
 
   add_action('wp_enqueue_scripts', 'include_scripts');

  // seting menu navs
  function setup_menus(){
    $location = array(
      'primary' => 'top menu',
      'footer' => 'footer menu',
    );
    register_nav_menus($location);
  }
  add_action('init', 'setup_menus');
 ?>