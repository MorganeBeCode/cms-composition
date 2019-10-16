<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <?php wp_head(); ?>

<body>
<?php get_header();?>
<div id="front" class="top container">

    <div class="img-g col-lg-6">
        <img class="image-g" src="<?php echo get_field('bandeau_image_g')['sizes']['wpm_taille_1']; ?>">
        <a href="#" class="survol-g">
            <h1 class="titre"><?php the_field('bandeau_titre_g') ?></h1>
            <h2 class="sous-titre">sous titre</h2>
            <p class="texte-lien">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non debitis delectus dolores
                perspiciatis
                necessitatibus sunt inventore, magnam a molestias aut fugiat velit vitae at? Vero qui beatae dolor nam
            </p>
            <p class="titre-lien">découvrir le magasin <img class="fleche-lien-g" src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="flèche">
            </p>
            <div class="bloc-fleche-g">
                <img class="fleche-g" src="<?php bloginfo('template_url'); ?>/assets/img/svg/fleche-droite.svg" alt="">
            </div>




        </a>
    
    </div>
    <div class="img-d col-lg-6">
        <img class="image-d" src="<?php echo get_field('bandeau_image_d')['sizes']['wpm_taille_1']; ?>">
        <a href="#" class="survol-d">
            <h1 class="titre"><?php the_field('bandeau_titre_d') ?></h1>
            <h2 class="sous-titre">sous titre</h2>
            <p class="texte-lien">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non debitis delectus dolores
                perspiciatis
                necessitatibus sunt inventore, magnam a molestias aut fugiat velit vitae at? Vero qui beatae dolor nam
            </p>
            <p class="titre-lien">découvrir le magasin <img class="fleche-lien-d" src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="flèche">
            </p>
            <div class="bloc-fleche-d">
                <img class="fleche-d" src="<?php bloginfo('template_url'); ?>/assets/img/svg/fleche-droite.svg" alt="">
            </div>




        </a>
    
    </div>
    
</div>




<h2 class = "groupe"><?php echo get_field('bandeau_survol_g_titre')?></h2>




 <?php get_footer();?>
    
</body>
</html>
