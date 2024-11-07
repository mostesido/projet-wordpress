<?php
// Enregistrer la barre latérale (sidebar)
function mon_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Barre Latérale',
        'id'            => 'sidebar-1',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mon_theme_widgets_init' );
