<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2 class="col-10 text-center titre_partenaires">Nos Partenaires</h2>
        </div>
        <div class="partenaireSwiper swiper">
            <div class="swiper-wrapper">
                <?php
                $partenaire = new WP_Query('post_type=partenaires');
                while ($partenaire->have_posts()) : $partenaire->the_post();
                ?>
                    <div class="swiper-slide">
                        <?php the_post_thumbnail('large') ?>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>