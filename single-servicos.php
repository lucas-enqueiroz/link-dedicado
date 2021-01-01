<?php
// Template Name: Single Serviços
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="container servico_item animar-interno">
  <div class="grid-11">
    <h2><?php the_title(); ?></h2>
  </div>
  <div class="grid-8 servico_info">
    <?php the_content(); ?>
  </div>
</section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>