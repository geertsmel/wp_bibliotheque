<?php


define('VERSION', '1.0');

register_nav_menus([
    'primary_menu' => 'Menu Principal',
    'footer_menu' => 'Menu du pied de page',
]);

add_theme_support('custom-logo', [
    'height' => '32px',
    'width' => '32px',
]);

add_theme_support('custom-background');

add_filter('wp_nav_menu', function($contenu){
    return str_replace('[logo]', get_custom_logo(), $contenu);
});

add_filter('the_excerpt', function($contenu) {
    $contenu = str_replace('</p>', ' [...]</p>', $contenu);
    return $contenu;
});

// add_action('wp_enqueue_scripts', function() {
//     if(is_singular($post_types = 'livres')) {
//         wp_enqueue_style('single-livres_css', get_stylesheet_directory_uri() . '/css/single-livres.css');
//         wp_enqueue_scripts('single-livres_js', get_stylesheet_directory_uri() . '/js/single-livres.js', ['single-livres2_js'], VERSION, true);
//         wp_enqueue_scripts('single-livres2_js', get_stylesheet_directory_uri() . '/js/single-livres2.js', ['single-livres_js'], VERSION, true);
//     }
// });
