<?php // Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main class="main-slider">
  <img class="main-slider__img" src="<?php echo get_template_directory_uri(); ?>/img/netflix.jpg" alt="Evento Netflix">
</main>

<?php include(TEMPLATEPATH . "/inc/solucoes.php"); ?>

<?php include(TEMPLATEPATH . "/inc/services.php"); ?>

<section class="rotine">
  <h2 class="rotine-title subtitle">Rotina dos nossos projetos</h2>
  <p class="rotine-text">Passe o mouse e conheça nossa rotina nos seus projetos</p>
  <div class="rotine-item projeto">
    <h3 class="rotine-item_title">Projeto</h3>
    <div class="rotine-item_text">
      <p>Iniciamos o projeto coletando todas as informações necessárias do seu evento ou empresa para o desenvolvimento da infraestrutura.</p>
      <p>Oferecemos novas ideias e soluções para implementar o seu projeto.</p>
    </div>
  </div>
  <div class="rotine-item montagem">
    <h3 class="rotine-item_title">Infraestrutura</h3>
    <div class="rotine-item_text">
      <p>Com o projeto desenhado a nossa equipe especializada começa toda montagem da infraestrutura necessária para a realização do evento.</p>
      <p> Certificando que tudo está em pleno funcionamento, começam a fase de testes.</p>
    </div>
  </div>
  <div class="rotine-item resultado">
    <h3 class="rotine-item_title">Monitoramento</h3>
    <div class="rotine-item_text">
      <p>Ao final da montagem toda a nossa equipe fica de plantão, para caso ocorra qualquer tipo de incidente no evento. </p>
      <p>Preparados para monitorar a rede e realizar manutenção preventiva e emergencial no evento.</p>
      <p>Assim, você ficando tranquilo com seu evento funcionando perfeitamente.</p>
    </div>
  </div>
</section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>