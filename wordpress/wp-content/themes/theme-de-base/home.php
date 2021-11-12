<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
		<?php get_template_part('partials/nouvelles'); ?> 
		<?php get_template_part('partials/services'); ?> 
		<?php get_template_part('partials/temoignage'); ?> 
		<?php get_template_part('partials/donation'); ?> 
		<?php get_template_part('partials/partenaires'); ?>
<?php endwhile; 

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>