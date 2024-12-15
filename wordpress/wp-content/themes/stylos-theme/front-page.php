<?php
get_header();
?>

<main class="site-main">
  <h1 class="text-center">Bem-vindo à Loja Stylos</h1>

  <div class="products-grid">
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 8 // Mostra 8 produtos
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