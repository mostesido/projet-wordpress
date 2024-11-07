<?php
// Enregistrer le menu de navigation
function mon_theme_setup() {
    register_nav_menus(array(
        'menu_principal' => 'Menu Principal'
    ));

    // Ajouter le support pour les images à la une
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mon_theme_setup');

// Enregistrer les styles CSS et scripts
function mon_theme_scripts() {
    wp_enqueue_style('mon-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mon_theme_scripts');
?>
