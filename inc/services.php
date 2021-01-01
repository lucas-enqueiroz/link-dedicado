<section class="container accordion">
  <section class="accordion-tabs">
    <button class="accordion-tab accordion-active" data-actab-group="0" data-actab-id="0">Servicos</button>
    <button class="accordion-tab" data-actab-group="0" data-actab-id="1">Tab 2</button>
    <button class="accordion-tab" data-actab-group="0" data-actab-id="2">Tab 3</button>
    <button class="accordion-tab" data-actab-group="0" data-actab-id="3">Tab 4</button>
    <button class="accordion-tab" data-actab-group="0" data-actab-id="4">Tab 5</button>
  </section>
  <section class="accordion-content">
    <article class="accordion-item accordion-active" data-actab-group="0" data-actab-id="0">
      <h4 class="accordion-item__label">Servicos</h4>
      <div class="accordion-item__container">
        <ul class="service-list">

          <?php $cabeamento = $the_query = new WP_Query ([ 'tipos_servico' => 'cabeamento-estruturado', 'order'   => 'ASC' ]);  ?>
          <?php if ( $cabeamento->have_posts() ) : while ( $cabeamento->have_posts() ) : $cabeamento->the_post(); ?>

          <a class="service-list__link" href="<?php the_permalink(); ?>">
            <li class="service-list__item">
              <img class="service-list__icon" src="<?php echo get_template_directory_uri(); ?>/img/bkp/favicon.svg"" alt="">
              <h3 class=" service-list__title"><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
            </li>
          </a>

          <?php endwhile; else: endif; ?>
          <?php wp_reset_query(); wp_reset_postdata(); ?>
        </ul>
      </div>
    </article>
    <article class=" accordion-item" data-actab-group="0" data-actab-id="1">
      <h4 class="accordion-item__label">Tab 2</h4>
      <div class="accordion-item__container">
        <p>reprehenderit temporibus, assumenda cupiditate consequatur soluta odit ex repudiandae delectus cumque, provident hic sed quod? Quis, nam. Similique eaque quae vel recusandae expedita qui sint fugiat, nisi assumenda et ex molestiae atque deleniti magni, ipsam libero!</p>
      </div>
    </article>
    <article class="accordion-item" data-actab-group="0" data-actab-id="2">
      <h4 class="accordion-item__label">Tab 3</h4>
      <div class="accordion-item__container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, deserunt minima? Ut facere minus, ipsa dolore animi quis alias eos, porro corporis quod esse quidem. Maxime a aperiam perspiciatis architecto?</p>
      </div>
    </article>
    <article class="accordion-item" data-actab-group="0" data-actab-id="3">
      <h4 class="accordion-item__label">Tab 4</h4>
      <div class="accordion-item__container">
        <p>psum dolor sit amet, consectetur adipisicing elit. Voluptates, deserunt minima? Ut facere minus, ipsa dolore</p>
      </div>
    </article>
    <article class="accordion-item" data-actab-group="0" data-actab-id="4">
      <h4 class="accordion-item__label">Tab 5</h4>
      <div class="accordion-item__container">
        <p>aborum similique facere quae. Quo cupiditate ad iste qui aliquam quibusdam quod, ut doloremque ipsa quas soluta, sapiente possimus, tempora rerum ab nesciunt vitae molestiae dolor earum illum repudiandae! Voluptas sed, soluta facere nisi perferendis cupiditate! Dicta et praesentium non ab, quod commodi, illo saepe accusantium tempora autem eos nemo. Animi, pariatur placeat laudantium dolorib!</p>
      </div>
    </article>
  </section>
</section>