<ul class="service-list">

  <?php $cabeamento = $the_query = new WP_Query ([ 'tipos_servico' => 'the_field()', 'order'   => 'ASC' ]);  ?>
  <?php if ( $cabeamento->have_posts() ) : while ( $cabeamento->have_posts() ) : $cabeamento->the_post(); ?>

  <a class="service-list__link" href="<?php the_permalink(); ?>">
    <li class="service-list__item">
      <img class="service-list__icon" src="<?php echo get_template_directory_uri(); ?>/img/favicon.svg"" alt="">
              <h3 class=" service-list__title"><?php the_title(); ?></h3>
      <?php the_content(); ?>
    </li>
  </a>

  <?php endwhile; else: endif; ?>
  <?php wp_reset_query(); wp_reset_postdata(); ?>
</ul>