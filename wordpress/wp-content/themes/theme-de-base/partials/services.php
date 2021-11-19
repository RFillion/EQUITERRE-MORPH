<section id="#services" class="section--services">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <h2 class="col-10">Services</h2>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper swiper-services">

          <?php
          $service = new WP_Query('post_type=service');
          while ($service->have_posts()) : $service->the_post();
          ?>
            <div class="swiper-slide">
              <div class="img-service">
                <?php the_post_thumbnail('large') ?>
              </div>
              <div class="gradient"></div><a href="#">
                <h3 class="h3-services"><?php the_title(); ?></h3>
              </a>
            </div>
          <?php
          endwhile;
          wp_reset_postdata();
          ?>

        </div>
      </div>
    </div>
  </div>
</section>