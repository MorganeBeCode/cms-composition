<?php
function register_theme_menus() {
    register_nav_menus( 
      array(
        'menu-header-1' => __( 'Emplacement Principal' ),
        'menu-footer-1' => __( 'Emplacement Pied de page 1' ),
      )
    );
  };
  
add_action( 'init', 'register_theme_menus' );
  
add_image_size( 'wpm_taille_1', 1500, 1250, true ); 

// enlever l'éditeur de texte Gutenberg
// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

  
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function wpa_90820() {
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() .'/assets/CSS/style.css', array(), '1.0' );
  }
  
  add_action('wp_enqueue_scripts', 'wpa_90820');

// Enable the option show in rest
add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );
// Enable the option edit in rest
add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );