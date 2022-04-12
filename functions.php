<?php

// add custom thumbnails
add_image_size('card--large', 704, 396, true);
add_image_size('card--regular', 352, 198, true);
add_image_size('card--small', 176, 99, true);

add_image_size('card-thumbnail--large', 1056, 596, true);
add_image_size('card-thumbnail--regular', 528, 298, true);
add_image_size('card-thumbnail--small', 264, 149, true);

add_image_size('profile-button--large', 320, 320, true);
add_image_size('profile-button--regular', 160, 160, true);
add_image_size('profile-button--small', 80, 80, true);

add_image_size('footer-logo--large', 1000, 60, false);
add_image_size('footer-logo--regular', 500, 30, false);
add_image_size('footer-logo--small', 250, 15, false);

// Turn off Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Remove comments section in CMS
function remove_menus(){
  remove_menu_page('edit-comments.php');
}
add_action( 'admin_menu', 'remove_menus' );

function admin_bar_edit() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'admin_bar_edit' );

// Remove category functionality for posts
// https://ryanbenhase.com/remove-tags-categories-or-any-taxonomy/
function ryanbenhase_unregister_tags() {
  unregister_taxonomy_for_object_type( 'category', 'post' );
}

add_action( 'init', 'ryanbenhase_unregister_tags' );

// Move Yoast to bottom
function yoasttobottom() {
  return 'low';
}
add_filter('wpseo_metabox_prio', 'yoasttobottom');

// Custom Post Types
add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts() {

  $default_args = array(
    "menu_icon" => "dashicons-admin-page",
    "supports" => array( "title", "editor", "custom-fields", "revisions" ),
    "description" => "",
    "public" => true,
    "show_ui" => true,
    "has_archive" => true,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "query_var" => true
  );

  // Custom Post Type: Onderzoeksproject
  $labels = array(
    "name" => "Projecten",
    "singular_name" => "Project",
  );

  $args = array(
    "rewrite" => array( "slug" => "projecten", "with_front" => true ),
    "labels" => $labels,
    'taxonomies' => array('post_tag')
  );

  $args = array_merge($default_args, $args);

  register_post_type( "project", $args );

  // Custom Post Type: Resource
  $labels = array(
    "name" => "Resources",
    "singular_name" => "Resource",
  );

  $args = array(
    "rewrite" => array( "slug" => "resources", "with_front" => true ),
    "labels" => $labels,
    'taxonomies' => array('post_tag')
  );

  $args = array_merge($default_args, $args);

  register_post_type( "resource", $args );

  // Custom Post Type: Profile
  $labels = array(
    "name" => "Profielen",
    "singular_name" => "Profiel",
  );

  $args = array(
    "rewrite" => array( "slug" => "medewerkers", "with_front" => true ),
    "labels" => $labels
  );

  $args = array_merge($default_args, $args);

  register_post_type( "profile", $args );

  // Custom Post Type: Profile (pure)
  $labels = array(
    "name" => "Profielen (pure)",
    "singular_name" => "Profiel (pure)",
  );

  $args = array(
    "rewrite" => array( "slug" => "medewerkers_pure", "with_front" => true ),
    "labels" => $labels,
    "publicly_queryable" => false,
    "exclude_from_search" => true,
    'capabilities' => array(
      'edit_post'          => 'update_core',
      'read_post'          => 'update_core',
      'delete_post'        => 'update_core',
      'edit_posts'         => 'update_core',
      'edit_others_posts'  => 'update_core',
      'delete_posts'       => 'update_core',
      'publish_posts'      => 'update_core',
      'read_private_posts' => 'update_core'
    ),
  );

  $args = array_merge($default_args, $args);

  register_post_type( "profile_pure", $args );

  // Custom Post Type: Publication
  $labels = array(
    "name" => "Publicaties",
    "singular_name" => "Publicatie",
  );

  $args = array(
    "rewrite" => array( "slug" => "publications", "with_front" => true ),
    "labels" => $labels,
    "publicly_queryable" => false,
    "exclude_from_search" => true
  );

  $args = array_merge($default_args, $args);

  register_post_type( "publication", $args );

  // Custom Post Type: Publication (pure)
  $labels = array(
    "name" => "Publicaties (pure)",
    "singular_name" => "Publicatie (pure)",
  );

  $args = array(
    "rewrite" => array( "slug" => "publications_pure", "with_front" => true ),
    "labels" => $labels,
    "publicly_queryable" => false,
    "exclude_from_search" => true,
    'capabilities' => array(
      'edit_post'          => 'update_core',
      'read_post'          => 'update_core',
      'delete_post'        => 'update_core',
      'edit_posts'         => 'update_core',
      'edit_others_posts'  => 'update_core',
      'delete_posts'       => 'update_core',
      'publish_posts'      => 'update_core',
      'read_private_posts' => 'update_core'
    ),
  );

  $args = array_merge($default_args, $args);

  register_post_type( "publication_pure", $args );

  // Custom Post Type: Event
  $labels = array(
    "name" => "Evenementen",
    "singular_name" => "Evenement",
  );

  $args = array(
    "rewrite" => array( "slug" => "evenementen", "with_front" => true ),
    "labels" => $labels,
    'taxonomies' => array('post_tag')
  );

  $args = array_merge($default_args, $args);

  register_post_type( "event", $args );

}

// Custom Taxonomies
add_action( 'init', 'cptui_register_my_taxes' );

function cptui_register_my_taxes() {

  $default_args = array(
    "hierarchical" => true,
    "show_ui" => true,
    "query_var" => true,
    "show_admin_column" => false
  );

  // Custom Taxonomy: Thema
  $labels = array(
    "name" => "Thema's",
    "label" => "Thema's",
  );

  $args = array(
    "labels" => $labels,
    "label" => "Thema's",
    "rewrite" => array( 'slug' => 'thema', 'with_front' => true )
  );

  $args = array_merge($default_args, $args);

  register_taxonomy( "thema", array( "project" ), $args );

  // Custom Taxonomy: Periode
  $labels = array(
    "name" => "Periodes",
    "label" => "Periodes",
  );

  $args = array(
    "labels" => $labels,
    "label" => "Periodes",
    "rewrite" => array( 'slug' => 'period', 'with_front' => true )
  );

  $args = array_merge($default_args, $args);

  register_taxonomy( "period", array( "project", "resource" ), $args );

  // Custom Taxonomy: Resource type
  $labels = array(
    "name" => "Resource types",
    "label" => "Resource types",
  );

  $args = array(
    "labels" => $labels,
    "label" => "Resource types",
    "rewrite" => array( 'slug' => 'resource_type', 'with_front' => true )
  );

  $args = array_merge($default_args, $args);

  register_taxonomy( "resource_type", array( "resource" ), $args );
}

// Menus
function register_my_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menu' );

// Add ACF options page
if(function_exists('acf_add_options_page')) {
  acf_add_options_page();
}

/**
*
* Prevent Wordpress from wrapping images and iframes in p tags
* http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/
* ( <p> and <iframe> and ACF support - http://wordpress.stackexchange.com/questions/136840/how-to-remove-p-tags-around-img-and-iframe-tags-in-the-acf-wysiwyg-field
*/
function filter_ptags_on_images_iframes($content)
{
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images_iframes');

// ACF WYSIWYG Plugin
function get_field_without_ptags_on_images($field_name, $post_id = false) {
  // add_filter('acf_the_content', 'filter_ptags_on_images_iframes');
  if($post_id) {
    $content = get_field($field_name, $post_id);
  } else {
    $content = get_field($field_name);
  }
  // remove_filter('acf_the_content', 'filter_ptags_on_images_iframes');
  // return $field;
  $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
  return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}

// Pagination
add_filter('previous_posts_link_attributes', 'posts_link_attributes_previous');
add_filter('next_posts_link_attributes', 'posts_link_attributes_next');

function posts_link_attributes_previous() {
  return 'class="pagination__button pagination__button--previous"';
}

function posts_link_attributes_next() {
    return 'class="pagination__button pagination__button--next"';
}

// Excerpt
function new_excerpt_ellipsis( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_ellipsis');

// Get linked elements (provided by multilingualpress)
function get_linked_elements() {
  // ask mlp
  $type = ( is_tax() ? 'term' : 'post' );
  return mlp_get_linked_elements(get_queried_object_id(), $type, get_current_blog_id());
}

// Get term link (provided by multilingualpress)
function get_blog_term_link( $blog_id, $term_id ) {
  switch_to_blog( $blog_id );
  $link = get_term_link( $term_id );
  restore_current_blog();
  return $link;
}

// Get language link (provided by multilingualpress)
function get_language_link($site_id, $post_id) {
  $link = ( is_tax() ? get_blog_term_link($site_id, $post_id) : get_blog_permalink($site_id, $post_id) );
  return $link . '?noredirect=' . mlp_get_blog_language($site_id, false);
}

// Load translation files
function transparent_theme_setup() {
   load_theme_textdomain( 'huygens', get_template_directory() . '/languages' );

   $locale = get_locale();
   $locale_file = get_template_directory() . "/languages/$locale.php";

   if ( is_readable( $locale_file ) ) {
       require_once( $locale_file );
   }
}
add_action( 'after_setup_theme', 'transparent_theme_setup' );

?>