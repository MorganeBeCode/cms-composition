<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" type="text/css" media="screen" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<header>


    <div class="header container">
        <div class = "logo col-lg-3">
            <ul>
            <li> <a href = "#"><img class = "logo-icon" src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo-small.svg" alt="home"></a></li>
                <li class="title-mp"> MPOSITION</li>
            </ul>
        </div>
        
        
        <!-- <a href = "#"><img class = "home-icon" src="<?php bloginfo('template_url'); ?>/assets/img/svg/home-minimal.svg" alt="home"></a>    -->
        


         <?php
wp_nav_menu( array( 
    'container' => 'nav',
    'container_class' => 'custom-menu-class col-lg-7' ) ); 
?>
        <!-- <nav class = "menu col-lg-7">
            <ul>
                <li><a href = "#"><img class = "home-icon" src="<?php bloginfo('template_url'); ?>/assets/img/svg/home-minimal.svg" alt="home"></a></li>
                <li><a href = "#">MAGASIN</a></li>
                <li id="menu-item-87" class="architecture menu-item menu-item-type-post_type menu-item-object-page menu-item-87">
                    <a href="http://localhost/wordpress/architecture-dinterieur/">ARCHITECTURE D'INTERIEUR</a>
                </li>
                <li><a href = "#">A PROPOS</a></li>
                <li><a href = "#">BLOG</a></li>
                <li><a href = " http://localhost/wordpress/contact/">CONTACT</a></li>
            </ul>
        </nav> -->
        <a href = "#" class = "col-lg-2">
            <div class="wishlist">
                <ul class="col-lg-12">
                    <li>Wishlist <img class = "bullet-icon" src="<?php bloginfo('template_url'); ?>/assets/img/svg/bullet-list.svg" alt="home"></li>
                </ul>
             </div>
        </a>
    </div>


</header>



   

