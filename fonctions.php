<?php
function enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri().'/style.css');
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