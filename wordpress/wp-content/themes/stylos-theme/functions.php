<?php

// Função para carregar o CSS e os scripts
function stylos_enqueue_styles()
{
  wp_enqueue_style('stylos-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'stylos_enqueue_styles');

// Função para registrar o menu
function stylos_register_menus()
{
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'stylos-theme'),
  ));
}
add_action('init', 'stylos_register_menus');
