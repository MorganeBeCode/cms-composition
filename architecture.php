<?php
/**
 * Template Name: Architecte
 */

 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>



<?php wp_head(); ?>
<body>
    

<?php get_header(); ?>

<img class="image" src="<?php echo get_field('diaporama_images_dia')['sizes']['wpm_taille_1']; ?>">
<h1 class="title"><?php the_field("etude_d'archi_titre") ?></h1>


<?php get_footer();?>
</body>
</html>