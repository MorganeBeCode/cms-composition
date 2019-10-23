<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <?php wp_head(); ?>

<body>
<?php get_header();?>



<div id="front" class="top-s container">

    <div class="img-g col-lg-6">
        <img class="image-g" src="<?php echo get_field('bandeau_image_g')['sizes']['wpm_taille_1']; ?>">


        
        <a href="<?php echo get_field('bandeau_btn_g_url') ?>" class="survol-g">
            <h1 class="titre"><?php the_field('bandeau_titre_g') ?></h1>
            <h2 class="sous-titre"><?php echo get_field('bandeau_survol_g_titre')?></h2>
            <p class="texte-lien"><?php echo get_field('bandeau_survol_g_texte_g')?>
            </p>
            <p class="titre-lien"><?php echo get_field('bandeau_btn_g_title')?><img class="fleche-lien-g" src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="flèche">
            </p>
            <div class="bloc-fleche-g">
                <img class="fleche-g" src="<?php bloginfo('template_url'); ?>/assets/img/svg/fleche-droite.svg" alt="">
            </div>




        </a>
    
    </div>
    <div class="img-d col-lg-6">
        <img class="image-d" src="<?php echo get_field('bandeau_image_d')['sizes']['wpm_taille_1']; ?>">
 
        <?php 
  $group = get_field('bandeau_btn_d');

  if($group['title']) :

  $url = $group['url'];
  $target = 'target="_blank" rel="noopener"';

  if( $group['choice'] == 'pagelink' ) {
      $url = $group['page_link'];
      $target = '';
  } ?>

        <a class="survol-d" href="<?php echo $url ?>" <?php echo $target; ?> > 
            <h1 class="titre"><?php the_field('bandeau_titre_d') ?></h1>
            <h2 class="sous-titre"><?php echo get_field('bandeau_survol_d_titre')?></h2>
            <p class="texte-lien"><?php echo get_field('bandeau_survol_d_texte_d')?>
            </p>
            <p class="titre-lien"><?php echo get_field('bandeau_btn_d_title')?><img class="fleche-lien-d" src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="flèche">
            </p>
            <div class="bloc-fleche-d">
                <img class="fleche-d" src="<?php bloginfo('template_url'); ?>/assets/img/svg/fleche-droite.svg" alt="">
            </div>
        </a>
        <?php endif; ?>
    </div>
    



   

 
</div>

<div class="intro-s container">
    <div class="row">
        <div class="left col-lg-6 col-md-6">
            <div class="top">
                <p><?php echo get_field('intro_texte')?></p>
            </div>

            <div class="down">
                <h2><?php echo get_field('intro_titre')?></h2>
                <p><?php echo get_field('intro_wysiwyg')?></p>
                <a href="<?php echo get_field('intro_bouton_lien')?>"><p><?php echo get_field('intro_bouton_titre')?><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="flèche"></p></a>

            </div>

        

        </div>
        <div class="right col-lg-4 col-md-6">
            <img class="image-d" src="<?php echo get_field('intro_image')['sizes']['wpm_taille_2']; ?>">
        </div>
    </div>  

</div>
<section id="middle">
    <div class="gris"></div>

    <div class="milieu-s container">
        <div class="milieu col-lg-10">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo-small.svg" alt="logo">
            <h1><?php echo get_field('milieu_texte')?></h1>
            <a href="<?php echo get_field('milieu_bouton_lien')?>"><p><?php echo get_field('milieu_bouton_titre')?><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="flèche"></p></a>

        </div>


    </div>
</section>

<div class="tissus-s container">

    <div class="img-t col-lg-6">
        <img src="<?php echo get_field('tissus_image')['sizes']['wpm_taille_3']; ?>">
        
    </div>
    <div class="right col-lg-6">
        <h2><?php echo get_field('tissus_titre')?></h2>
        <p><?php echo get_field('tissus_wysiwyg')?></p>
        <a href="<?php echo get_field('tissus_bouton_lien')?>"><p><?php echo get_field('tissus_bouton_titre')?><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="flèche"></p></a>
    </div>

</div>






 <?php get_footer();?>
    
</body>
</html>
