<?php
  define('DOHKO_DIR', get_template_directory_uri());
  define('DOHKO_TEMPLATE_DIR', get_template_directory());
  define('IMAGES', DOHKO_DIR."/images"); 
  define('INCLUDES2', DOHKO_DIR."/includes"); 
  define('INCLUDES', DOHKO_TEMPLATE_DIR."/includes"); 
  define('JAVASCRIPTS', DOHKO_DIR."/js");
  include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 
  
  require_once(INCLUDES.'/scripts.php');

  require_once(INCLUDES.'/settings/menus.php');
  require_once(INCLUDES.'/settings/sidebars.php');
  require_once(INCLUDES.'/settings/thumbnails.php');
  require_once(INCLUDES.'/settings/excerpt.php');
  require_once(INCLUDES.'/settings/widgets.php');

  require_once(INCLUDES.'/masterpieces/pagination.php');
  require_once(INCLUDES.'/masterpieces/single_post.php');
  require_once(INCLUDES.'/masterpieces/index-post.php');

  define( 'ACF_LITE', true );
  include_once(INCLUDES.'/acf/acf.php');
  include_once(INCLUDES.'/acf_fields.php');
  
  require_once(INCLUDES.'/post_format/post-formats.php');
  require_once(INCLUDES.'/theme_options/settings.php');
  require_once(INCLUDES.'/theme_options/customizer.php');

  require_once(INCLUDES.'/tgm/tgm.php' );

  require_once('business-manager.php');

//  require_once('director-widgets.php');
//add_action( 'widgets_init', create_function( '', 'register_widget( "director_featured_business" );' ) );

add_action('init', 'director_rewrite');
function director_rewrite() {
  global $wp_rewrite;
  $wp_rewrite->add_permastruct('typename', 'typename/%year%/%postname%/', true, 1);
  add_rewrite_rule('typename/([0-9]{4})/(.+)/?$', 'index.php?typename=$matches[2]', 'top');
  $wp_rewrite->flush_rules(); // !!!
}
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
?>