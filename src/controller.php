<?php
/**
 * Front-end handler.
 * Gets content from DB, prepares for rendering, and calls the view.
 *
 * @package  BlogIntro
 * @since    1.0.0
 * @author   willgorham
 * @link     https://willgorham.com
 * @license  GNU General Public License 2.0+
 */
namespace BlogIntro;


add_action( 'twentytwelve_before_loop', __NAMESPACE__ . '\render_content' );

/**
 * Display the content for the Posts Page
 *
 * @since 1.0.0
 * @return void
 */
function render_content() {
  if ( ! is_home() ) {
    return;
  }

  $posts_page = get_posts_page();
  if ( ! $posts_page ) {
    return;
  }

  $contents = prepare_contents_for_rendering( $posts_page );

  echo $contents;
}


/**
 * Get post data object for Posts Page
 *
 * @since  1.0.0
 * @return \WP_Post|null
 */
function get_posts_page() {
  $posts_page_id = get_option( 'page_for_posts' );

  return get_post( $posts_page_id );
}

/**
 * Prepare the post contents for rendering.
 * Sanitizing and applying the_content filter
 *
 * @param  \WP_Post $post Post object
 * @return string         Cleaned HTML string to output
 */
function prepare_contents_for_rendering( \WP_Post $post ) {
  $content = wp_kses_post( $post->post_content );
  $content = apply_filters( 'the_content', $content );

  return $content;
}
