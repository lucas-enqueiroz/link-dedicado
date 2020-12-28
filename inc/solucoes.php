<section class="solutions">
  <h2 class="subtitle">Soluções Wirelless para Eventos</h2>
  <p>Com total monitoramento e gerenciamento, é possível criar um ambiente completo de wi-fi onde múltiplos ambientes de rede trabalhem de forma separada, com sistema de hotspot, gestão de usuários e velocidades independentes, você atenderá sob medida a necessidade de cada usuário.</p>
  <ul class="container service-list">

    <?php $solucoes = $the_query = new WP_Query (['tipos_servico' => 'solucoes', 'order' => 'ASC']); ?>
    <?php if ( $solucoes->have_posts() ) : while ( $solucoes->have_posts() ) : $solucoes->the_post(); ?>

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
</section>