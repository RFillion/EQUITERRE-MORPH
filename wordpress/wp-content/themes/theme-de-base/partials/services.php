<section id="#services" class="section--services">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <h2 class="col-10">Services</h2>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="swiper mySwiper">

            <?php 
            $service = new WP_Query('post_type=service');
            while($service->have_posts()) : $service->the_post();
            ?>
              <div class="swiper-wrapper swiper-services">
                <div class="swiper-slide">
                <div class="img-service">
                  <img src="/wp-content/themes/theme-de-base/sources/medias/img_services/ecole-ouverte.png">
                </div>
                  <div class="gradient"></div><a href="#">
                    <h3 class="h3-services">École ouverte</h3>
                  </a>
                </div>
                <div class="swiper-slide" style="background-image:url(/wp-content/themes/theme-de-base/sources/medias/img_services/panier-bio.png)">
                  <div class="gradient2"></div><a href="#">
                    <h3 class="h3-services">Panier bio</h3>
                  </a>
                </div>
                <div class="swiper-slide" style="background-image:url(/wp-content/themes/theme-de-base/sources/medias/img_services/recettes.png)">
                  <div class="gradient3"></div><a href="#">
                    <h3 class="h3-services">Recettes</h3>
                  </a>
                </div>
                <div class="swiper-slide" style="background-image:url(/wp-content/themes/theme-de-base/sources/medias/img_services/local.jfif)">
                  <div class="gradient4"></div><a href="#">
                    <h3 class="h3-services">Exigez local</h3>
                  </a>
                </div>
                <div class="swiper-slide" style="background-image:url(/wp-content/themes/theme-de-base/sources/medias/img_services/ferme.jfif)">
                  <div class="gradient5"></div><a href="#">
                    <h3 class="h3-services">Travailler sur une ferme</h3>
                  </a>
                </div>
                <div class="swiper-slide" style="background-image:url(/wp-content/themes/theme-de-base/sources/medias/img_services/epluche-ville.jpg)">
                  <div class="gradient"></div><a href="#">
                    <h3 class="h3-services">Épluche ta ville</h3>
                  </a>
                </div>
              </div>
              <?php
            endwhile;
            wp_reset_postdata();
            ?>

            </div>
          </div>
        </div>
      </section>