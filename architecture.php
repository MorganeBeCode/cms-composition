<?php
/**
 * Template Name: Architecte
 */

function prefix_add_archi_styles() {
    wp_enqueue_style( 'archi-dinterieur-style', get_template_directory_uri() . '/assets/CSS/archi-dinterieur-style.css' );
    };
    add_action( 'wp_enqueue_scripts', 'prefix_add_archi_styles' );
  

 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>



<?php wp_head(); ?>
<body>
    

<?php get_header(); ?>

<img class="image" src="<?php echo get_field('diaporama_images_dia')['sizes']['wpm_taille_1']; ?>">
<!-- <h1 class="title"><?php the_field("etude_d'archi_titre") ?></h1> -->


<?php get_footer();?>
</body>
</html>