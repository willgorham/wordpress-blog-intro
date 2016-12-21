<?php
/**
 * Add an introduction to the site's blog page using the built-in WordPress editor on the 'posts' page
 *
 * @package     BlogIntro
 * @author   willgorham
 * @link     https://willgorham.com
 * @license  GNU General Public License 2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Blog Intro
 * Plugin URI:  https://willgorham.com/web/plugins/blog-intro
 * Description: Introduce your blog page - Add an introduction to the site's blog page using the built-in WordPress editor on the 'posts' page
 * Version:     1.0.0
 * Author:      willgorham
 * Author URI:  https://willgorham.com
 * Text Domain: blog_intro
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace BlogIntro;

if ( ! defined( 'ABSPATH' ) ) {
  exit( 'Nah son' );
}

require_once( __DIR__ . '/assets/vendor/autoload.php');
