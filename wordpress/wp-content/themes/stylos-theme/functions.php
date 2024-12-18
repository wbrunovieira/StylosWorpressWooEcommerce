<?php


function stylos_enqueue_styles()
{
  wp_enqueue_style('stylos-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'stylos_enqueue_styles');


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

// Função para adicionar suporte a logotipo personalizado
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


function cadastrar_produto_ficticio()
{
  if (!class_exists('WC_Product_Simple')) {
    return;
  }

  if (get_transient('produto_tenis_cadastrado')) {
    return;
  }

  $product = new WC_Product_Simple();
  $product_id = $product->save();
  set_transient('produto_tenis_cadastrado', true, 60 * 60 * 24); // Marca como "cadastrado" por 24 horas
  return $product_id;
}
add_action('init', 'cadastrar_produto_ficticio');


function stylos_enqueue_custom_scripts()
{
  wp_enqueue_script('stylos-banner-slider', get_template_directory_uri() . '/assets/js/banner-slider.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'stylos_enqueue_custom_scripts');

function habilitar_bloco_shortcode()
{
  register_block_type('core/shortcode');
}
add_action('init', 'habilitar_bloco_shortcode');

