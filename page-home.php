<?php // Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main>

</main>
<div class="bg_services">
  <?php include(TEMPLATEPATH . "/inc/solucoes.php"); ?>

  <?php include(TEMPLATEPATH . "/inc/services.php"); ?>
</div>


<section class=" container services">


</section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>