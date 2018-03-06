<?php

// add custom thumbnails
// add_image_size('carousel-large--large', 2880, 1220, true);
// add_image_size('carousel-large--regular', 1440, 610, true);
// add_image_size('carousel-large--small', 720, 305, true);
//
// add_image_size('carousel-small--large', 2880, 548, true);
// add_image_size('carousel-small--regular', 1440, 274, true);
// add_image_size('carousel-small--small', 720, 137, true);
//
// add_image_size('carousel-thumbnail--large', 120, 120, true);
// add_image_size('carousel-thumbnail--regular', 60, 60, true);
//
// add_image_size('information-block-visual--large', 800, null, false);
// add_image_size('information-block-visual--regular', 400, null, false);
// add_image_size('information-block-visual--small', 200, null, false);
//
// add_image_size('project-visual--large', 972, null, false);
// add_image_size('project-visual--regular', 486, null, false);
// add_image_size('project-visual--small', 243, null, false);
//
// add_image_size('project-visual-overview--large', 1144, 600, true);
// add_image_size('project-visual-overview--regular', 572, 300, true);
// add_image_size('project-visual-overview--small', 286, 150, true);
//
// add_image_size('how-we-work--large', 660, 450, true);
// add_image_size('how-we-work--regular', 330, 225, true);
//
// add_image_size('image-holder-landscape--large', 2000, null, false);
// add_image_size('image-holder-landscape--regular', 1000, null, false);
// add_image_size('image-holder-landscape--small', 500, null, false);
//
// add_image_size('image-holder-portrait--large', 1480, null, false);
// add_image_size('image-holder-portrait--regular', 740, null, false);
// add_image_size('image-holder-portrait--small', 370, null, false);
//
// add_image_size('team-visual--large', 460, 460, true);
// add_image_size('team-visual--regular', 230, 230, true);

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
    "rewrite" => array( "slug" => "organisatie", "with_front" => true ),
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
    "rewrite" => array( 'slug' => 'periods', 'with_front' => true )
  );

  $args = array_merge($args, $default_args);

  register_taxonomy( "periods", array( "project", "resource" ), $args );

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

?>