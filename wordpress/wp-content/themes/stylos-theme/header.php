<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header py-2 px-4 w-full relative">
    <div class="flex justify-between items-center w-full mb-2 md:mb-4">
      <div class="flex items-center">
        <div class="social-icons">
          <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="social-link">
            <i class="fab fa-instagram hover-scale text-primary2"></i>
          </a>
          <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="social-link">
            <i class="fab fa-facebook-f hover-scale text-primary2 "></i>
          </a>
          <a href="https://www.tiktok.com" target="_blank" rel="noopener noreferrer" class="social-link">
            <i class="fab fa-tiktok hover-scale text-primary2"></i>
          </a>
        </div>

      </div>
      <div class="flex justify-center  text-xs text-primary2">
        <p>Entrega grátis a partir de R$ 200,00</p>
      </div>
    </div>

    <div class="logo-container">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoStylos.png" alt="Logo Stylos"
          class="logo-img">
      </a>
    </div>

    <div class="hidden md:flex justify-between items-center w-full">
      <a href="/" class="flex gap-2 items-center justify-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoStylos.png" width="96" height="96"
          alt="logo" class="mr-2 max-w-full" style="height: auto;">

      </a>
    </div>
  </header>