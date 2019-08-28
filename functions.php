<?php

add_action('init', 'eecontractingllc__register_menus');
add_action('wp_enqueue_scripts', 'eecontractingllc__enqueue_assets');

// Register menus for this theme
function eecontractingllc__register_menus()
{
  register_nav_menus(
    array(
      'menu-1' => __('Nav Menu'),
      'footer' => __('Hero Menu'),
      'social' => __('Social Links')
    )
  );
}

// Enqueue EE Contracting LLC assets
function eecontractingllc__enqueue_assets()
{
  wp_enqueue_script('schweb-js', get_stylesheet_directory_uri() . '/assets/js/schweb.js', array('jquery'), null, true);
  wp_enqueue_style('eecontractingllc', get_stylesheet_uri());
}
