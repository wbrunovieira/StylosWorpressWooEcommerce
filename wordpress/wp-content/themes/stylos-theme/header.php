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
        <div class="social-icons flex gap-2 md:gap-3">
          <!-- Ícones sociais -->
        </div>
      </div>
      <div class="flex justify-center text-[0.6rem] md:text-xs text-primary2">
        <p>Entrega grátis a partir de R$ 200,00</p>
      </div>
    </div>

    <div class="hidden md:flex justify-between items-center w-full">
      <a href="/" class="flex gap-2 items-center justify-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/LogoStylos.png" width="96" height="96" alt="logo"
          class="mr-2 max-w-full" style="height: auto;">
        <div
          class="flex gap-2 items-center justify-center rounded-md bg-primaryLight px-2 py-1 hover:scale-110 transition duration-300 ease-in-out">
          <img src="<?php echo get_template_directory_uri(); ?>/public/icons/home.svg" width="12" height="12"
            alt="Home Icon">
          <p class="text-primary2 text-[0.6rem] md:text-xs">Home</p>
        </div>
      </a>
    </div>
  </header>