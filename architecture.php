<?php
/**
 * Template Name: Architecte
 */
 ?>

<?php get_header(); ?> 


	<div class="content">
		<div class = "container body">
			<div class ="background-black"></div>
				<div class="titre diapo col-lg-12">
					<div class="titre principal col-lg-12">
						<h1 class="titre-h1"><?php the_field( 'diaporama_main_titre' ); ?></h1>
						<img src="<?php echo get_field('diaporama_images_dia')['sizes']['wpm_taille_1']; ?>"/> 
						<div class = "titre-image">
						<p class="nom-image"><?php the_field ('diaporama_titre' ); ?></p>
						<div class="projet"><p>Voir le projet</p></div>
						</div>
					</div>	
		</div>
	
	<!-- Partie Etude d'architecture -->
	
		<div class="etude-archi col-lg-12">
			<div class = "text col-lg-5">
				<h1 class="titre-etude-archi"><?php the_field( "etude_d'archi_titre" ); ?></h1>
				<p class = "soustitre-etude-archi"><?php the_field( "etude_d'archi_sous-titre" ); ?></p>
				<p class = "whatyousee-etude"><?php the_field( "etude_d'archi_wysiwyg" ); ?></p>
			</div>	
			<div class="etude-archi-d col-lg-7">
				<div class="etude-archi-content">
					<!-- Reapeter (partie noire à droite) -->
					<?php if ( have_rows( "etude_d'archi" ) ) : ?>
						<?php while ( have_rows( "etude_d'archi" ) ) : the_row(); ?>

						<p><?php the_sub_field( 'titre_d' ); ?></p>
							<p>
								<?php
									// check if the repeater field has rows of data
									if( have_rows('repeater') ):
										// loop through the rows of data
										while ( have_rows('repeater') ) : the_row();
											// display a sub field value
											the_sub_field('phrase');
										endwhile;
									else :
										// no rows found
									endif;
								?>
							</p>
						<?php endwhile; ?>
					<?php endif; ?>		
				</div>	
				<div class="black"></div> <!-- Morceau noir à droite -->
			</div>						
		</div> 

	<!-- Partie avec la photo de couple et leur decsription à côté -->
		<div class="nghi-et-stephan col-lg-12">
			<div class="photo col-lg-5">
				<img src="<?php echo get_field('nghi_&_stephan_image')['sizes']['wpm_taille_1']; ?>"/> 
			</div>
			<div class="text col-lg-7">
				<h1 class = "titre-nghi"><?php the_field( 'nghi_&_stephan_titre' ); ?></h1>
				<h2><?php the_field( 'nghi_&_stephan_ss-titre' ); ?></h2>
				<p class = ><?php the_field( 'nghi_&_stephan_wysiwyg' ); ?></p>
			</div>
		</div>		
				
	<!-- Partie tissu et artisanat -->
		<div class="tissu-et-artisanat col-lg-12">	
			<div class="diapo">
				<?php if ( have_rows( "tissus_&_artisanat" ) ) : ?>
					<?php while ( have_rows( "tissus_&_artisanat") ) : the_row(); ?>
							<?php
								// check if the repeater field has rows of data
								if( have_rows('repeater_diapo') ):
									// loop through the rows of data
									while ( have_rows('repeater_diapo') ) : the_row();
										// display a sub field value
										$image = get_sub_field('image');
										echo '<img class="tissus-image" src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
									endwhile;
								else :
									// no rows found
								endif;
							?>
				<div class="greyblock"></div>	
			</div>
			<div class="titre-sstitre-gauche col-lg-6">
				<h1><?php the_field( 'tissus_&_artisanat_titre' ); ?></h1>
				<h2><?php the_field( 'tissus_&_artisanat_sous-titre' ); ?></h2>
				<p><?php the_field( 'tissus_&_artisanat_wysiwyg_g' ); ?></p>
			</div>

			<div class="liste-droite col-lg-6">
				<p><?php the_field( 'tissus_&_artisanat_wysiwyg_d' ); ?></p>	
			</div>

				<?php endwhile; ?>
			<?php endif; ?>		
			
		</div> <!--fermeture col-lg-12-->
		<div class="imgLien-s">
	<div class="image col-lg-12">
		<img src="<?php echo get_field('tissus_&_artisanat_image')['sizes']['wpm_taille_4']; ?>">
		<div class="lien">
			
			<a href="<?php echo get_field('tissus_&_artisanat_bouton_lien')?>"><h2><?php echo get_field('tissus_&_artisanat_bouton_titre')?></h2><p><?php echo get_field('tissus_&_artisanat_bouton_titre-lien')?><img class="test" src="<?php bloginfo('template_url'); ?>/assets/img/svg/Group 1300.svg" alt="flèche"></p></a>
		</div>
	</div>

</div>
	</div>	<!--fermeture content-->	





<?php get_footer();?>

