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

function stylos_enqueue_font_awesome()
{
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'stylos_enqueue_font_awesome');


function stylos_custom_logo_setup()
{
  add_theme_support('custom-logo', array(
    'height' => 96,
    'width' => 96,
    'flex-height' => true,
    'flex-width' => true,
  ));
}
add_action('after_setup_theme', 'stylos_custom_logo_setup');
