<section id="#temoignage" class="section--temoignage">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <h2 class="col-10">Témoignages</h2>
    </div>
  </div>
  <div class="grid">

    <?php
    $temoignages = new WP_Query('post_type=temoignages');
    while ($temoignages->have_posts()) : $temoignages->the_post();
    ?>
      <div class="img-temoignage">
        <h3 class="img--title_temoignage"><?php the_title(); ?></h3>
        <?php the_post_thumbnail('large') ?>
      </div>
      <div class="text-temoignage">
        <p class="card-subtitle">
          <?php the_field('role') ?>
        </p>
        <p class="card-subtitle">
          <?php the_field('sous-role') ?>
        </p>
        <p class="card-text">
          <?php the_field('desc'); ?>
        </p>
        <a href="#" class="btn--temoignage">En savoir plus</a>
      </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>

  </div>
</section>