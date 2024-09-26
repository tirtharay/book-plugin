<?php
// Register meta boxes for author, publication date, and ISBN
function bp_add_book_meta_boxes() {
    add_meta_box( 'book_details_meta_box', 'Book Details', 'bp_display_book_meta_box', 'book', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'bp_add_book_meta_boxes' );

// Display meta boxes
function bp_display_book_meta_box( $post ) {
    $author = get_post_meta( $post->ID, 'author', true );
    $pub_date = get_post_meta( $post->ID, 'publication_date', true );
    $isbn = get_post_meta( $post->ID, 'isbn', true );

    ?>
    <p>
        <label for="book_author">Author:</label>
        <input type="text" name="book_author" value="<?php echo esc_attr( $author ); ?>" />
    </p>
    <p>
        <label for="book_publication_date">Publication Date:</label>
        <input type="date" name="book_publication_date" value="<?php echo esc_attr( $pub_date ); ?>" />
    </p>
    <p>
        <label for="book_isbn">ISBN:</label>
        <input type="text" name="book_isbn" value="<?php echo esc_attr( $isbn ); ?>" />
    </p>
    <?php
}

// Save custom fields data
function bp_save_book_meta_box_data( $post_id ) {
    if ( isset( $_POST['book_author'] ) ) {
        update_post_meta( $post_id, 'author', sanitize_text_field( $_POST['book_author'] ) );
    }
    if ( isset( $_POST['book_publication_date'] ) ) {
        update_post_meta( $post_id, 'publication_date', sanitize_text_field( $_POST['book_publication_date'] ) );
    }
    if ( isset( $_POST['book_isbn'] ) ) {
        update_post_meta( $post_id, 'isbn', sanitize_text_field( $_POST['book_isbn'] ) );
    }
}
add_action( 'save_post', 'bp_save_book_meta_box_data' );
