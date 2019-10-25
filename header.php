<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/CSS/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/CSS/archi-dinterieur-style.css" type="text/css" media="screen" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <div class="background"></div>
    <div class="header container">
        <div class="col-lg-2 p-0">
            <a href="#"><img class="logo-icon" src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo-full-white.svg" alt="home"></a>
        </div>
        <div class="col-lg-8 p-0">
            <?php
            wp_nav_menu(array(
            'container' => 'nav',
            'container_class' => 'custom-menu-class'
            ));
            ?>
        </div>
        <div class="col-lg-2 p-0">
            <a href="#">
                <div class="wishlist">
                    <span class="wishlist-txt">Wishlist</span> <img class="bullet-icon" src="<?php bloginfo('template_url'); ?>/assets/img/svg/bullet-list-black.svg" alt="home">
                </div>
            </a>
        </div>
    </div>