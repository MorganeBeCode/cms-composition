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
                    <p>Route de Hamoir, 87 – 4500 Huy </p>
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/icon-arrobas.svg" alt="icon"></span>
                    <p>info@meubles-composition.be </p>
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/phone-2.svg" alt="icon"></span>
                    <p>+32 (0)85 21 52 38</p>
                </div>
                <div class="col-lg-6 contact-time">
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/time-clock.svg" alt="icon"></span>
                    <p class="col-lg-10"> <b>Horaires</b> <br />Lundi › dimanche : (Fermé le mardi) <br>10h › 18h</p>
                </div>
            </div>
            <div class="col-lg-5 contact-route">
                <a class="google-map" href="#">Itinéraire <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></a>
            </div>
            <div class="col-lg-7 contact-map">
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
                <div class="form">
                </div>
                <div class="send-btn">
                    <button>Envoyer<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt=""></button>
                    <span>* Champs requis</span>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-discount">
        <div class="container">
            <div class="col-lg-8 contact-wishlist">
                <h2>10% sur vos prochains achats ?</h2>
                <div class="wishlist">
                    <a href="#">Ma wishlist <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></a>
                </div>
            </div>
        </div>
    </section>
    <footer id="contact-footer">
        <div class="container">
            <section id="contact-store" class="row">
                <div class="col-lg-7 store">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/jpg/1500x1250_02.jpg" alt="image">
                    <div class="wishlist">
                        <a href="#">Tissus et habillage maison <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></a>
                    </div>
                </div>
                <div class="col-lg-5 contact-time">
                    <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></span>
                    <p class="col-lg-10"> <b>Horaires</b> <br />Lundi › dimanche : (Fermé le mardi) <br>10h › 18h</p>
                </div>
            </section>
        </div>
        <?php get_footer(); ?>
    </footer>
</body>

</html>