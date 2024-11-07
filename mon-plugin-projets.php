<?php
/*
Plugin Name: Mon Plugin Projets
Description: Ce plugin ajoute un type de contenu personnalisé appelé "Projets".
Version: 1.0
Author: mostesido
*/

// Empêcher l'accès direct au fichier
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Fonction pour enregistrer le Custom Post Type "Projets"
function mon_plugin_enregistrer_projets() {
    $labels = array(
        'name'                  => 'Projets',
        'singular_name'         => 'Projet',
        'menu_name'             => 'Projets',
        'name_admin_bar'        => 'Projet',
        'add_new'               => 'Ajouter un projet',
        'add_new_item'          => 'Ajouter un nouveau projet',
        'new_item'              => 'Nouveau projet',
        'edit_item'             => 'Modifier le projet',
        'view_item'             => 'Voir le projet',
        'all_items'             => 'Tous les projets',
        'search_items'          => 'Rechercher des projets',
        'parent_item_colon'     => 'Projets parent:',
        'not_found'             => 'Aucun projet trouvé',
        'not_found_in_trash'    => 'Aucun projet trouvé dans la corbeille',
        'featured_image'        => 'Image à la une du projet',
        'set_featured_image'    => 'Définir l\'image à la une',
        'remove_featured_image' => 'Supprimer l\'image à la une',
        'use_featured_image'    => 'Utiliser comme image à la une',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,  // Activer l'éditeur Gutenberg
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive'           => true,  // Permet d'afficher une archive
        'rewrite'               => array('slug' => 'projets'),
        'show_in_nav_menus'     => true,
        'menu_icon'             => 'dashicons-portfolio',  // Icône personnalisée dans le menu
    );

    register_post_type( 'projet', $args );
}

// Hook pour enregistrer le Custom Post Type lors de l'activation de WordPress
add_action( 'init', 'mon_plugin_enregistrer_projets' );
