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

  $args = array_merge($args, $default_args);

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

  $args = array_merge($args, $default_args);

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

  $args = array_merge($args, $default_args);

  register_post_type( "profile", $args );

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

  $args = array_merge($args, $default_args);

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

  $args = array_merge($args, $default_args);

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

  $args = array_merge($args, $default_args);

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

  $args = array_merge($args, $default_args);

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
function get_field_without_ptags_on_images($field_name) {
  // add_filter('acf_the_content', 'filter_ptags_on_images_iframes');
	$content = get_field($field_name);
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

// Lazyload
function prepare_for_lazyload($image) {
  $image = str_replace('class="', 'class="lazyload ', $image);
  $image = str_replace(' src="', ' data-src="', $image);
  $image = str_replace(' srcset="', ' data-srcset="', $image);

  return $image;
}

?>