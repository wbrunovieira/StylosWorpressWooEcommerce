<?php get_header(); ?>

<main>
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post();
        the_title('<h2>', '</h2>');
        the_content();
      endwhile;
    else:
      echo '<p>Nenhuma postagem encontrada.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
