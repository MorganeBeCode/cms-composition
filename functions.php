<?php


add_image_size('wpm_taille_1', 1500, 1250);
add_image_size('wpm_taille_2', 1000, 1600);
add_image_size('wpm_taille_3', 1800, 1200);
add_image_size('wpm_taille_4', 2600, 700);

// enlever l'éditeur de texte Gutenberg
// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);


// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');



//add CSS to News page
function add_news_styles()
{
  wp_enqueue_style('news-style', get_template_directory_uri() . '/assets/CSS/news-style.css');
};
add_action('wp_enqueue_scripts', 'add_news_styles');
//

//add CSS to Single page
function add_single_styles()
{
  wp_enqueue_style('single-style', get_template_directory_uri() . '/assets/CSS/single-style.css');
};
add_action('wp_enqueue_scripts', 'add_single_styles');
//

function prefix_add_contact_styles()
{
  wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/CSS/contact.css');
};

add_action('wp_enqueue_scripts', 'prefix_add_contact_styles');


//end contact style .....

//add CSS to Footer
function prefix_add_footer_styles()
{
  wp_enqueue_style('your-style-id', get_template_directory_uri() . '/assets/CSS/style.css', array(), '1.0', 'all');
};
add_action('get_footer', 'prefix_add_footer_styles');

//
function wpa_90820()
{
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/CSS/style.css', array(), '1.1');
}

add_action('wp_enqueue_scripts', 'wpa_90820');


//Ajouter custome menu
function wpb_custom_new_menu()
{
  register_nav_menus(
    array(
      'my-custom-menu' => __('My Custom Menu'),
      'extra-menu' => __('Extra Menu')
    )
  );
}
add_action('init', 'wpb_custom_new_menu');


////////////////////////
function wmpudev_enqueue_icon_stylesheet()
{
  wp_register_style('fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
  wp_enqueue_style('fontawesome');
}
add_action('wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet');

// Enable the option show in rest
add_filter('acf/rest_api/field_settings/show_in_rest', '__return_true');
// Enable the option edit in rest
add_filter('acf/rest_api/field_settings/edit_in_rest', '__return_true');


// function to contact map page ...

function my_acf_init()
{
  acf_update_setting('google_api_key', 'AIzaSyCC4zDMMA-du2VAGdKAbLeLpvGWDwCWyoo');
}
add_action('acf/init', 'my_acf_init');

// function pagination
function post_pagination() {
     global $wp_query;
     $pager = 999999999; // need an unlikely integer
 
        echo paginate_links( array(
             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
             'format' => '?paged=%#%',
             'current' => max( 1, get_query_var('paged') ),
             'total' => $wp_query->max_num_pages
        ) );
   }