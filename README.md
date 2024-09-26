# Books Plugin

A WordPress plugin that provides the following functionality:

- Adds a custom post type called **Book** with fields for title, author, publication date, and ISBN.
- Adds a custom taxonomy called **Genre** for the Book post type.
- Adds a shortcode `[recent_books]` that displays the 5 most recent books with their title, author, and publication date.

## Features

- **Custom Post Type:** Register a custom post type called "Book" with fields for title, author, publication date, and ISBN.
- **Custom Taxonomy:** Adds a taxonomy called "Genre" for categorizing books.
- **Shortcode:** Display the most recent books using the `[recent_books]` shortcode.
- **Meta Boxes:** Easily add information about the book such as author, publication date, and ISBN.

## Installation

1. Download or clone the repository into your `wp-content/plugins` directory.
    ```bash
    cd wp-content/plugins
    git clone https://github.com/tirtharay/books-plugin.git
    ```

2. Activate the plugin in the WordPress admin under **Plugins**.

## Usage

1. **Custom Post Type (Book):**
   - Go to **Books** in the WordPress admin to add new books.
   - Each book includes fields for author, publication date, and ISBN.

2. **Custom Taxonomy (Genre):**
   - Add or edit genres under **Books > Genres** to categorize your books.

3. **Shortcode:**
   - Use the `[recent_books]` shortcode in any post or page to display the 5 most recent books.
   - The output includes the title, author, and publication date for each book.

   Example:
   ```html
   [recent_books]
