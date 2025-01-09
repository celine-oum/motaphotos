<?php
function enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri().'/style.css');

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
// Enqueue le script "script.js" dépendant de jQuery et utilise AJAX
function custom_enqueue_scripts()
{
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', ['jquery'], '', true);
    // Localize the script with the AJAX URL
    wp_localize_script('script', 'my_ajax_obj', ['ajax_url' => admin_url('admin-ajax.php')]);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
// Prise en charge des images mises en avant
add_theme_support('post-thumbnails');

function desactiver_gutenberg_pour_cpt($can_edit, $post_type) {
  if ($post_type === 'photo') {
      return false; 
  }
  return $can_edit;
}
add_filter('use_block_editor_for_post_type', 'desactiver_gutenberg_pour_cpt', 10, 2);

function displayTaxonomies($nomTaxonomie)
{
    if ($terms = get_terms([
        'taxonomy' => $nomTaxonomie,
        'orderby' => 'name',
    ])) {
        foreach ($terms as $term) {
            echo '<option class="js-filter-item dropdown-item" value="'.$term->slug.'">'.$term->name.'</option>';
        }
    }
}









