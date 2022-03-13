<?php
require_once('inc/widget.php');
require_once('inc/panel.php');
require_once('inc/meta.php');
require_once('videoembed.php');

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Sidebar Right',
'before_widget' => '<div class="section"><div class="area">',
'after_widget' => '</div></div>',
'before_title' => '<h3><span>',
'after_title' => '</h3></span>',
) );
register_sidebar( array(
'name' => 'Footerbar Left',
'id' => 'footer-left',
'before_widget' => '<div class="textwidget">',
'after_widget' => '</div>',
'before_title' => '<h2><span>',
'after_title' => '</span></h2>',
) );
register_sidebar( array(
'name' => 'Footerbar Center',
'id' => 'footer-center',
'before_widget' => '<div class="textwidget">',
'after_widget' => '</div>',
'before_title' => '<h2><span>',
'after_title' => '</span></h2>',
) );
register_sidebar( array(
'name' => 'Footerbar Right',
'id' => 'footer-right',
'before_widget' => '<div class="textwidget">',
'after_widget' => '</div>',
'before_title' => '<h2><span>',
'after_title' => '</span></h2>',
) );

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
'main' => __( 'Header Menu' ),
'secondary' => __( 'Footer Menu' ),
		)
	);
}


add_action( 'after_setup_theme', 'mytheme_custom_thumbnail_size' );
function mytheme_custom_thumbnail_size(){
    add_image_size( 'thumb-small', 300, 9999, true ); // Hard crop to exact dimensions (crops sides or top and bottom)
    add_image_size( 'thumb-medium', 520, 9999 ); // Crop to 520px width, unlimited height
    add_image_size( 'thumb-large', 720, 340 ); // Soft proprtional crop to max 720px width, max 340px height
}
get_the_post_thumbnail($id, array(200,200) );
add_action('init','random_add_rewrite');
function random_add_rewrite() {
   global $wp;
   $wp->add_query_var('random');
   add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
}

add_theme_support( 'post-thumbnails' );

add_action('template_redirect','random_template');
function random_template() {
   if (get_query_var('random') == 1) {
           $posts = get_posts('post_type=anime&orderby=rand&numberposts=1');
           foreach($posts as $post) {
                   $link = get_permalink($post);
           }
           wp_redirect($link,307);
           exit;
   }
}
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}


add_theme_support( 'automatic-feed-links' );
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

add_filter('widget_tag_cloud_args','set_tag_cloud_sizes');
function set_tag_cloud_sizes($args) {
$args['smallest'] = 10;
$args['largest'] = 10;
return $args; }
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}

add_theme_support('html5', array('search-form'));


function anime() {

	$labels = array(
		'name'                => _x( 'Anime Info', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Anime Info', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Anime Info', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Anime:', 'text_domain' ),
		'all_items'           => __( 'All Anime', 'text_domain' ),
		'view_item'           => __( 'View Anime Info', 'text_domain' ),
		'add_new_item'        => __( 'Add New Anime', 'text_domain' ),
		'add_new'             => __( 'Add Anime', 'text_domain' ),
		'edit_item'           => __( 'Edit Anime Info', 'text_domain' ),
		'update_item'         => __( 'Update Anime Info', 'text_domain' ),
		'search_items'        => __( 'Search Anime', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'anime', 'text_domain' ),
		'description'         => __( 'Info Anime', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-desktop',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'anime', $args );

}

// Hook into the 'init' action
add_action( 'init', 'anime', 0 );

add_action('init', 'cptui_register_my_taxes_genre');
function cptui_register_my_taxes_genre(){
	register_taxonomy(
		'genre',
		array(
			0 => 'anime',
		),
		array(
			'hierarchical' => true,
			'label' => 'Genre',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Genre',
				'popular_items' => 'Popular Genre',
				'all_items' => 'All Genres',
				'parent_item' => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item' => 'Edit Genre',
				'update_item' => 'Update Genre',
				'add_new_item' => 'Add New Genre',
				'new_item_name' => 'New Genre Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}

function batch() {

	$labels = array(
		'name'                => _x( 'Batch', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Batch', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Batch', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Batch:', 'text_domain' ),
		'all_items'           => __( 'All Batch', 'text_domain' ),
		'view_item'           => __( 'View Batch', 'text_domain' ),
		'add_new_item'        => __( 'Add New Batch', 'text_domain' ),
		'add_new'             => __( 'Add Batch', 'text_domain' ),
		'edit_item'           => __( 'Edit Batch', 'text_domain' ),
		'update_item'         => __( 'Update Batch', 'text_domain' ),
		'search_items'        => __( 'Search Batch', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'batch', 'text_domain' ),
		'description'         => __( 'Info Anime', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-desktop',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'batch', $args );

}

// Hook into the 'init' action
add_action( 'init', 'batch', 0 );

add_action('init', 'cptui_register_my_taxes_genres');
function cptui_register_my_taxes_genres(){
	register_taxonomy(
		'genres',
		array(
			0 => 'batch',
		),
		array(
			'hierarchical' => true,
			'label' => 'Genre',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Genre',
				'popular_items' => 'Popular Genre',
				'all_items' => 'All Genres',
				'parent_item' => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item' => 'Edit Genre',
				'update_item' => 'Update Genre',
				'add_new_item' => 'Add New Genre',
				'new_item_name' => 'New Genre Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}

function ost() {

	$labels = array(
		'name'                => _x( 'OST', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'OST', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'OST', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent OST:', 'text_domain' ),
		'all_items'           => __( 'All OST', 'text_domain' ),
		'view_item'           => __( 'View OST', 'text_domain' ),
		'add_new_item'        => __( 'Add New OST', 'text_domain' ),
		'add_new'             => __( 'Add OST', 'text_domain' ),
		'edit_item'           => __( 'Edit OST', 'text_domain' ),
		'update_item'         => __( 'Update OST', 'text_domain' ),
		'search_items'        => __( 'Search OST', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'ost', 'text_domain' ),
		'description'         => __( 'OST', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-format-audio',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'ost', $args );

}

// Hook into the 'init' action
add_action( 'init', 'ost', 0 );

function post_from_today_class($class) {
    global $post;
    if( date('U') - get_the_time('U', $post->ID) < 24*60*60 ) $class[] = 'new-post-today';
    return $class;
}

add_filter('post_class','post_from_today_class');

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}


?>