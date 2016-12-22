<?php
/**
 * Enable editor feature for 'posts' page in the back-end.
 *
 * @package  BlogIntro
 * @since    1.0.0
 * @author   willgorham
 * @link     https://willgorham.com
 * @license  GNU General Public License 2.0+
 */
namespace BlogIntro;

add_action( 'edit_form_after_title', __NAMESPACE__ . '\enable_posts_page_editor' );

/**
 * Enable editor on Posts Page to allow for content entry
 * @since  1.0.0
 * @param  \WP_Post $post Current post object
 */
function enable_posts_page_editor( $post ) {
  if ( get_option( 'page_for_posts' ) == $post->ID ) {
    add_post_type_support( 'page', 'editor' );
  }
}
