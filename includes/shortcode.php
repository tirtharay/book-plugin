<?php
// Shortcode to display recent books
function bp_recent_books_shortcode() {
    $args = array(
        'post_type'      => 'book',
        'posts_per_page' => 5,
        'order'          => 'DESC',
    );

    $recent_books = new WP_Query( $args );

    if ( $recent_books->have_posts() ) {
        $output = '<ul class="recent-books-list">';
        while ( $recent_books->have_posts() ) {
            $recent_books->the_post();
            $author = get_post_meta( get_the_ID(), 'author', true );
            $pub_date = get_post_meta( get_the_ID(), 'publication_date', true );

            // Wrap the book title in an anchor tag linking to the book's post
            $output .= '<li>';
            $output .= '<strong><a href="' . get_permalink() . '">' . get_the_title() . '</a></strong>';
            $output .= '<p><b>Author:</b> ' . esc_html( $author ) . '</p>';
            $output .= '<p><b>Publication Date: </b>' . esc_html( $pub_date ) . '</p>';
            $output .= '</li>';
        }
        $output .= '</ul>';
    } else {
        $output = '<p>No recent books found.</p>';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode( 'recent_books', 'bp_recent_books_shortcode' );
