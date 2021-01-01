<?php
// Template Name: Página de Contato
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="container servico_item animar-interno">
  <div class="grid-11">
    <h2><?php the_title(); ?></h2>
  </div>
  <div class="grid-8 servico_info">
    <?php the_content(); ?>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta consequuntur tempora enim deserunt perferendis dolor illo expedita ratione asperiores nemo mollitia ea natus, fugit, vel ut dignissimos tempore animi fugiat.</p>
  </div>
</section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>