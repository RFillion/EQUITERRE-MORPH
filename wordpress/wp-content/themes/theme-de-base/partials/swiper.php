<div class="hero">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">

            <?php 
            $caroussel = new WP_Query('post_type=heros');
            while($caroussel->have_posts()) : $caroussel->the_post();
            ?>
            <div class="swiper-slide">
                <div class="thumbnail">
                    <?php the_post_thumbnail('large') ?>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10">
                            <h1><?php the_title(); ?></h1>
                            <h2><?php the_field('sous-titre'); ?></h2>
                            <a href="<?php the_field('link'); ?>"><button class="btn--hero primary">Lire la suite</button></a>
                        </div>
                    </div>
                </div>
                <div class="hero--gradient"></div>
            </div>
            <?php 
        endwhile;
        wp_reset_postdata();
        ?>

        </div>
    </div>
</div>