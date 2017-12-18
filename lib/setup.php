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
  register_nav_menus( array(
    'primary_navigation' => __('Primary Navigation', 'sage'),
    'secondary_navigation' => __('Secondary Navigation', 'sage'),
    'footer' => __('Footer', 'sage')
  )
  );

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

  isset($display) || $display = in_array(true, [
    // The sidebar will be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    // is_404(),
    //is_front_page()
    //is_page_template('news-home.php'),
    //is_page_template('page.php')
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  //wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

    wp_enqueue_style( 'sage/css', get_stylesheet_directory_uri() . '/dist/styles/main.css', array(), filemtime( get_stylesheet_directory() . '/dist/styles/main.css' ) );


  // css pages dependencies
  require('css.php');

    wp_enqueue_style( $page_css_url, get_stylesheet_directory_uri() . '/dist/styles/' . $page_css_url . '.css', array(), filemtime( get_stylesheet_directory_uri() . '/dist/styles/' . $page_css_url . '.css' ) );

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
  wp_enqueue_script('ga', get_template_directory_uri() . '/ext/ga.js', [], null, true);
  wp_enqueue_script('hotjar', get_template_directory_uri() . '/ext/hotjar.js', [], null, true);

    if ( is_page_template( 'intelligence.php' ) ) {
        wp_enqueue_script('gradient', get_template_directory_uri() . '/ext/gradient.js', [], null, true);
    }

  if ( is_page_template( 'bourse.php' ) ) {
    wp_enqueue_script('amcharts', get_template_directory_uri() . '/ext/amcharts/amcharts.js', [], null, true);
    wp_enqueue_script('serial', get_template_directory_uri() . '/ext/amcharts/serial.js', [], null, true);
    wp_enqueue_script('amstock', get_template_directory_uri() . '/ext/amcharts/amstock.js', [], null, true);
    wp_enqueue_script('stock-data', get_template_directory_uri() . '/data.php', [], null, true);
    wp_enqueue_script('amconfig', Assets\asset_path('scripts/amconfig.js'), [], null, true);
  }

  if ( is_page_template( 'home-1.1.php' ) ) {
    wp_enqueue_style('slickcss', Assets\asset_path('styles/slick.css'), [], null, true);
    wp_enqueue_script('slickjs', Assets\asset_path('scripts/slick.min.js'), array (), filemtime( Assets\asset_path('scripts/slick.min.js' )), true);
    wp_enqueue_script('slickjs-init', Assets\asset_path('scripts/slick-config.js'), filemtime( Assets\asset_path('scripts/slick-config.js' )), true);
    //wp_enqueue_script('popover', Assets\asset_path('scripts/popover.js'), [], null, true);
  }

    if ( is_page_template( 'partners.php' ) ) {
        wp_enqueue_script('partners', Assets\asset_path('scripts/bootstrap.min.js'), [], null, true);
        wp_enqueue_script('popover', Assets\asset_path('scripts/popover.js'), [], null, true);
    }

  if ( is_page_template( 'career.php' ) ) {
    wp_enqueue_script('classie', Assets\asset_path('scripts/classie.js'), [], null, true);
    wp_enqueue_script( 'masonry' );
    wp_enqueue_script('multipleFilterMasonry', Assets\asset_path('scripts/multipleFilterMasonry.js'), [], null, true);
    wp_enqueue_script('masonry-config', Assets\asset_path('scripts/masonry-config.js'), [], null, true);
  }
    if ( is_page_template( 'ressources.php' ) ) {
        wp_enqueue_script('classie', Assets\asset_path('scripts/classie.js'), [], null, true);
        wp_enqueue_script( 'masonry' );
        wp_enqueue_script('multipleFilterMasonry', Assets\asset_path('scripts/multipleFilterMasonry.js'), [], null, true);
        wp_enqueue_script('ressources-masonry', Assets\asset_path('scripts/ressources-masonry.js'), [], null, true);
    }
  if ( is_page_template( 'press.php' ) || is_page_template( 'cp.php' ) || is_page_template( 'blog.php' ) || is_page_template( 'documentation.php' ) || is_page_template( 'single-job.php' ) ) {
    wp_enqueue_script('fixed-scroll-listener', Assets\asset_path('scripts/fixed-scroll-listener.js'), [], null, true);
  }
  if ( is_page_template( 'enterprise.php' ) ) {
    wp_enqueue_script('sticky', Assets\asset_path('scripts/jquery.sticky.js'), [], null, true);
  }
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);


// Shortcode to output custom PHP in Visual Composer
function my_vc_shortcode( $atts ) {
    include( get_template_directory() . '/svg/intelligence-scheme.php' );
}
add_shortcode( 'intelligence_php_tag', __NAMESPACE__ . '\\my_vc_shortcode');