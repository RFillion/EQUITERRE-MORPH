<section id="#actualites" class="section--actualites">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-baseline">
      <h2 class="col-8 col-md-9 d-flex justify-content-center justify-content-md-start">Nouvelles</h2>
      <h5 class="col-4 col-md-3 d-flex justify-content-center"><a href="<?php echo esc_url('/services'); ?>">Voir plus</a></h5>
    </div>
  </div>
  <div class="grid">

  <?php 
    $news = new WP_Query('post_type=nouvelles');
    while($news->have_posts()) : $news->the_post();
    ?>
    <article class="card-nouvelle">
      <div class="img-nouvelle">
        <?php the_post_thumbnail('large') ?>
      </div>
      <div class="text-nouvelle">
        <h4 class="text-nouvelle--title"><?php the_title(); ?></h4>
        <h5 class="text-nouvelle--soustitre"><?php the_field('date'); ?></h5>
        <p class="text-nouvelle--desc">
          <?php the_field('description') ?>
        </p>
        <a href="<?php the_field('lien') ?>" class="btn--actualite">En savoir plus</a>
      </div>
    </article>
    <?php endwhile; wp_reset_postdata(); ?>

</section>