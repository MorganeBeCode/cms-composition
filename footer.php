<?php wp_footer(); ?>
<div id="footer" class="container">
<<<<<<< HEAD
    <section id="contact-store" class="row">
        <div class="col-lg-7 store">
            <div class="img col-lg-4">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/jpg/1500x1250_02.jpg" alt="image">
            </div>
            <div class="wishlist col-lg-8">
                <a href="#">Tissus et habillage maison <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></a>
            </div>
        </div>
        <div class="col-lg-5 contact-time">
            <span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/time-clock.svg" alt="icon"></span>
            <?php if (have_rows('info')) : ?>
                <?php while (have_rows('info')) : the_row(); ?>
                    <p class="col-lg-10"> <b>Horaires</b> <br /><?php the_sub_field('times'); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
=======
<section id="contact-store" class="row">
<div class="col-lg-7 store">
<div class="img col-lg-4">
<img src="<?php bloginfo('template_url'); ?>/assets/img/jpg/1500x1250_02.jpg" alt="image">
</div>
<div class="wishlist col-lg-8">
<a href="#">Tissus et habillage maison <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="icon"></a>
</div>
</div>
<div class="col-lg-5 contact-time">
<span class="col-lg-2"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/time-clock.svg" alt="icon"></span>
<p class="col-lg-10"> <b>Horaires</b> <br /><?php the_field( 'times' ); ?></p>
</div>
</section>
>>>>>>> 7009fb6fc0e459f914e9241fdeee2be4f1f49bec
</div>
<div class="footer container">
    <div class="map col-lg-4">
        <h5>Rendez-nous visite !</h5>
        <a class="google-map" href="#">Google map <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt=""></a>
    </div>
    <div class="adress col-lg-4">
        <p><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/marker-road.svg" alt="">Route de Hamoir, 87 – 4500 Huy </p>
        <p><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/icon-arrobas.svg" alt=""><a href="#">info@meubles-composition.be</a></p>
        <p><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/phone-2.svg" alt=""><a href="">+32 (0)85 21 52 38</a> </p>
    </div>
    <div class="sm-icons col-lg-4">
        <div class="justIcons">
            <span><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo-facebook.svg" alt=""> </a> </span>
            <span><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo-instagram.svg" alt=""> </a> </span>
            <span><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo-pinterest.svg" alt=""> </a> </span>
        </div>
        <p><a href="#">&#169 COMPOSITION 2019 - </a><a href="#"> POLITIQUE DE CONFIDENTIALITE</a> </p>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>