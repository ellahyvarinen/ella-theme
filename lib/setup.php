<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage'),
    'secondary_navigation' => __('Secondary Navigation', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
    is_page(),
  ]);

  //return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  //Google fonts
  wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css?family=Assistant:800|Poppins:200,300,400|Quicksand:300,400|Karla:400,700|Anton|Roboto:400,900|Montserrat:400,700&amp;subset=latin-ext', false, null );
  //Main css
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
  
  wp_enqueue_script('sage/nightsky', Assets\asset_path('scripts/nightsky.js'), ['sage/js'], null, true);
  wp_enqueue_script('sage/diamonds', Assets\asset_path('scripts/diamonds.js'), ['sage/js'], null, true);
  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);






function my_acf_op_init() {

    // Check function exists.
  if( function_exists('acf_add_options_page') ) {

        // Add parent.
    $parent = acf_add_options_page(array(
      'page_title'  => __('Theme General Settings'),
      'menu_title'  => __('Theme Settings'),
      'redirect'    => false,
    ));

        // Header
    $child = acf_add_options_page(array(
      'page_title'  => __('Header'),
      'menu_title'  => __('Header'),
      'parent_slug' => $parent['menu_slug'],
    ));
        // Footer
    $child = acf_add_options_page(array(
      'page_title'  => __('Footer'),
      'menu_title'  => __('Footer'),
      'parent_slug' => $parent['menu_slug'],
    ));
  }
}
add_action('acf/init', __NAMESPACE__ . '\\my_acf_op_init');





/**
  * Init custom formatting menut
  * Callback function to insert 'styleselect' into the $buttons array
*/
function my_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter( 'mce_buttons_2', __NAMESPACE__ . '\\my_mce_buttons_2' ); // Register our callback to the appropriate filter



/**
* Add custom formats to TinyMCE
*/
function my_mce_before_init_insert_formats( $init_array ) {
  // Define the style_formats array
  $style_formats = array(
    // Each array child is a format with it's own settings
    array(
      'title' => 'Primary Button',
      'block' => 'span',
      'classes' => 'btn btn--primary',
      'wrapper' => true,
    ),
    array(
      'title' => 'Secondary Button',
      'block' => 'span',
      'classes' => 'btn btn--secondary',
      'wrapper' => true,
    ),
    array(
      'title' => 'Tertiary Button',
      'block' => 'span',
      'classes' => 'btn btn--tertiary',
      'wrapper' => true,
    ),
    array(
      'title' => 'Text Link',
      'block' => 'span',
      'classes' => 'link link--primary',
      'wrapper' => true,
    ),
    array(
      'title' => 'Big Text',
      'block' => 'span',
      'classes' => 'highlight-text',
      'wrapper' => true,
    ),
    array(
      'title' => 'Quote',
      'block' => 'span',
      'classes' => 'quote',
      'wrapper' => true,
    ),
    array(
      'title' => 'Quote Italic',
      'block' => 'span',
      'classes' => 'quote italic',
      'wrapper' => true,
    ),
  );
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );
  return $init_array;
}
add_filter( 'tiny_mce_before_init', __NAMESPACE__ . '\\my_mce_before_init_insert_formats' ); // Attach callback to 'tiny_mce_before_init'



/**
 * Add more image sizes
*/

function aw_custom_add_image_sizes() {
    add_image_size( 'square', 500, 500, array( 'center', 'center' ) );
    add_image_size( 'xlarge', 2000, 1200, array( 'center', 'center' ) );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\aw_custom_add_image_sizes' );

