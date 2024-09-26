<?php
// Register Custom Taxonomy: Genre
function bp_register_genre_taxonomy() {
    $labels = array(
        'name'              => 'Genres',
        'singular_name'     => 'Genre',
        'search_items'      => 'Search Genres',
        'all_items'         => 'All Genres',
        'edit_item'         => 'Edit Genre',
        'update_item'       => 'Update Genre',
        'add_new_item'      => 'Add New Genre',
        'new_item_name'     => 'New Genre Name',
        'menu_name'         => 'Genre',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
    );

    register_taxonomy( 'genre', 'book', $args );
}
add_action( 'init', 'bp_register_genre_taxonomy' );
