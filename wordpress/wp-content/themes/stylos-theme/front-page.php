<?php get_header(); ?>

<main class="site-main">
  <h1 class="text-center">Bem-vindo à Loja Stylos</h1>


  <section class="banner-slider">
    <div class="banner-slide">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/foto1banner2.png" alt="Banner 1">
      <div class="banner-content">
        <h1>Agora também <br> estamos juntas na internet.</h1>
        <p>Faça o seu pedido que entregamos na sua casa.</p>
      </div>
    </div>

    <div class="banner-slide">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/foto2-2.jpg" alt="Banner 2">
      <div class="banner-content">
        <h1>Agora também <br> estamos juntas na internet.</h1>
        <p>Faça o seu pedido que entregamos na sua casa.</p>
      </div>
    </div>
    <div class="banner-slide">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/foto3-2.jpg" alt="Banner 3">
      <div class="banner-content">
        <h1>Agora também <br> estamos juntas na internet.</h1>
        <p>Faça o seu pedido que entregamos na sua casa.</p>
      </div>

    </div>
    <div class="banner-slide">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/foto4-3.jpg" alt="Banner 4">
      <div class="banner-content">
        <h1>Agora também <br> estamos juntas na internet.</h1>
        <p>Faça o seu pedido que entregamos na sua casa.</p>
      </div>
    </div>
  </section>

  <div class="products-grid">
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 8
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()) {
      while ($loop->have_posts()):
        $loop->the_post();
        wc_get_template_part('content', 'product');
      endwhile;
    } else {
      echo __('Nenhum produto encontrado');
    }
    wp_reset_postdata();
    ?>
  </div>
</main>

<?php get_footer(); ?>