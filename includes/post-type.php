<?php
// Register Custom Post Type: Book
function cbp_register_book_post_type() {
    $labels = array(
        'name'               => 'Books',
        'singular_name'      => 'Book',
        'menu_name'          => 'Books',
        'name_admin_bar'     => 'Book',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Book',
        'new_item'           => 'New Book',
        'edit_item'          => 'Edit Book',
        'view_item'          => 'View Book',
        'all_items'          => 'All Books',
        'search_items'       => 'Search Books',
        'not_found'          => 'No books found.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_menu'       => true,
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
        'rewrite'            => array( 'slug' => 'books' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'book', $args );
}
add_action( 'init', 'cbp_register_book_post_type' );
