<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/CSS/single-style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Single</title>
</head>
<body>
<?php
/**
 * Template Name: Single
 */
 ?>

<!-- HEADER -->
<?php get_header(); ?>

<!-- MAIN -->
<div class="single-container mb-5 mt-5">
	<?php if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); ?>
            <div class="row mt-5 mb-5">
                <div class="col-md-2 p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 15.429 9.286">
                        <g id="fleche-droite" transform="translate(3)">
                            <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                        </g>
                    </svg>    
                    <a href="http://localhost/wordpress/news"> Retour </a>
                </div>
                <div class="single-date col-md-2 offset-8 p-0">
                    <?php the_date(); ?>
                </div>
            </div>
            <div class="row">
	        <?php if( have_rows('post') ): 
                while ( have_rows('post') ) : the_row();
                    if( get_row_layout() == 'text' ): ?>
                        <div class="single-texte"><?php the_sub_field('txt') ?></div>
                    <?php elseif( get_row_layout() == 'picture' ):
                        $image = get_sub_field('img');
			            echo '<img class="single-image" src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
                    elseif( get_row_layout() == 'title' ): ?>
		                <h3 class="single-titre"><?php the_sub_field('titre') ?></h3>
                    <?php endif;
                endwhile;
            endif; ?>
            </div>
        <?php endwhile; 
    endif;?>
</div>

<!-- FOOTER -->
<?php get_footer();?>

</body>
</html>