
<?php get_header();?>

<img class="image" src="<?php echo get_field('bandeau_image_g')['sizes']['wpm_taille_1']; ?>">
<img class="image" src="<?php echo get_field('bandeau_image_d')['sizes']['home_top']; ?>">

<h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>
<h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>

<h2 class = "groupe"><?php echo get_field('bandeau_survol_g_titre')?></h2>



<div class=container>
    <p>Yoooooooooooooooo</p>
    </div>

    <?php get_footer();?>