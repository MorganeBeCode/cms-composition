<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/CSS/news-style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>News</title>
</head>
<body>
    <?php
/**
 * Template Name: News
 */

 ?>

<!-- HEADER -->
<?php get_header(); ?>

<!-- MAIN -->
<div class="news-container mb-5">
    
    <h1>Architecte d'intérieur en action</h1>

    <?php $q = new WP_Query(array( 
        	'post_type' => 'news',
        	'order'   => 'ASC',
			'posts_per_page' => 6,
        ));?>

    <div class="row">
    <?php if ( $q->have_posts() ) : 
        while( $q->have_posts() ) : $q->the_post();?>
		    <div class="col-md-6 mt-5 mb-5 p-0" id="<?php echo $post->post_name; ?>">
                <a href="<?php the_permalink(); ?>">	
                    <div class="img-container">
                        <?php if( have_rows('post') ): 
                            while ( have_rows('post') ) : the_row();
                                if( get_row_layout() == 'picture' ):
                                    $image = get_sub_field('img');
					                echo '<img class="news-image" src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
                                    break;    
                                endif; 
                            endwhile;  
                        endif; ?>
                    </div>
                    <div>
					    <h3 class="news-titre"><?php the_title(); ?></h3>
                        <p class="news-date"><?php the_date(); ?></p>
				    </div>
			    </a>
		    </div>
        <?php endwhile; 
    endif; ?>
    </div>	

    <!-- Pagination -->
    <?php if ( $q->have_posts() ) :?>
        <div>
            <?php post_pagination() ?>  
        </div>
    <?php endif; ?>   

</div>

<!-- FOOTER -->
<?php get_footer();?>

</body>
</html>
