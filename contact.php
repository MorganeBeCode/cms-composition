<?php

/**
 * Template Name: Contact
 */
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/contact.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Contact</title>
    <style>
        #contact-discount {
            background-image: url('<?php bloginfo('template_url'); ?>/assets/img/jpg/2600x700_01.jpg');
        }
    </style>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="contact-header">
        <?php get_header(); ?>
    </header>
    <section id="contact-info">
        <div class="trait"></div>
        <div class="container contact-container">
            <div class="col-lg-5 contact-title">
                <h1>Contact</h1>
            </div>
            <div class="col-lg-7">
                <div class="col-lg-6 contact-address">
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/marker-road.svg" alt="icon"></span>
                    <?php if (have_rows('info')) : ?>
                        <?php while (have_rows('info')) : the_row(); ?>
                            <p><?php the_sub_field('route'); ?> </p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/icon-arrobas.svg" alt="icon"></span>
                    <?php if (have_rows('info')) : ?>
                        <?php while (have_rows('info')) : the_row(); ?>
                            <p><?php the_sub_field('e-mail'); ?> </p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/phone-2.svg" alt="icon"></span>
                    <?php if (have_rows('info')) : ?>
                        <?php while (have_rows('info')) : the_row(); ?>
                            <p><?php the_sub_field('telephone'); ?> </p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 contact-time">
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/time-clock.svg" alt="icon"></span>
                    <?php if (have_rows('info')) : ?>
                        <?php while (have_rows('info')) : the_row(); ?>
                            <p class="col-lg-10"> <b>Horaires</b> <br /><?php the_sub_field('times'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-5 contact-route">
                <a class="google-map" href="#">Itinéraire <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></a>
            </div>
            <div class="col-lg-7 contact-map">
                <?php $location_array = get_field('map');
                the_field('map');
                ?>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/icon-googlemap-marker.svg" alt="map-icon">
            </div>
        </div>
    </section>
    <section id="contact-question-form">
        <div class="container">
            <div class="col-lg-5 contact-question">
                <h1>Une question,<br>une demande d'offre ?</h1>
                <p>Formulaire de contact</p>
            </div>
            <div class="col-lg-7 contact-form">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="send-btn">
                        <button>Envoyer<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt=""></button>
                        <span>* Champs requis</span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="contact-discount">
        <div class="container">
            <div class="col-lg-8 contact-wishlist">
                <h2><?php the_field('discount'); ?></h2>
                <div class="wishlist">
                    <a href="#">Ma wishlist <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></a>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact-footer">
        <div class="container">
            <section id="contact-store" class="row">
                <div class="col-lg-8 store">
                    <div class="img col-lg-4">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/jpg/1500x1250_02.jpg" alt="image">
                    </div>
                    <div class="wishlist col-lg-8">
                        <a href="#">Tissus et habillage maison <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-4 contact-time">
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/time-clock.svg" alt="icon"></span>
                    <?php if (have_rows('info')) : ?>
                        <?php while (have_rows('info')) : the_row(); ?>
                            <p class="col-lg-10"> <b>Horaires</b> <br /><?php the_sub_field('times'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
        </div>
        <?php get_footer(); ?>
    </footer>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC4zDMMA-du2VAGdKAbLeLpvGWDwCWyoo&callback=initMap" type="text/javascript"></script>
</body>

</html>