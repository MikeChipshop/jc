<?php
/*
 * Plugin Name: Required Site Functions
 * Description: Adds specific content functions to the Jo Cowen theme.
 * Plugin URI: https://miniman-webdesign.co.uk
 * Version: 1.0
 * Author: Mike @ Miniman
 * Author URI: https://miniman-webdesign.co.uk
 * License: Private
*/

/***************************************************
/ PAGINATE
/***************************************************/

if ( ! function_exists( 'miniman_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 * Based on paging nav function from Twenty Fourteen
 */

function miniman_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 3,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&laquo;', 'yourtheme' ),
		'next_text' => __( '&raquo;', 'yourtheme' ),
		'type'      => 'list',
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<?php echo $links; ?>
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;

/***************************************************
/ Give ACF a Boost
/***************************************************/

add_filter('acf/settings/remove_wp_meta_box', '__return_true');

/***************************************************
/ GRABBING PARENT PAGE ID
/***************************************************/

function is_tree($pid) {
	global $post;
	if(is_page()&&($post->post_parent==$pid||is_page($pid)))
    	return true;
	else
    	return false;
};

/***************************************************
/ RD Blog Tab Fix
/***************************************************/

function rd_fix_blog_tab_on_cpt($classes, $item, $args) {
  if (!is_singular('post') && !is_category() && !is_tag()) {
    $blog_page_id = intval(get_option('page_for_posts'));
    if ($blog_page_id != 0) {
      if ($item->object_id == $blog_page_id) {
        unset($classes[array_search('current_page_parent', $classes)]);
      }
    }
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'rd_fix_blog_tab_on_cpt', 10, 3);

/* Include other CPT's in above */

add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
function add_current_nav_class($classes, $item) {

	global $post;
	$current_post_type = get_post_type_object(get_post_type($post->ID));
	$current_post_type_slug = $current_post_type->rewrite['slug'];
	$menu_slug = strtolower(trim($item->url));

	if (strpos($menu_slug,$current_post_type_slug) !== false) {
	   $classes[] = 'current-menu-item';
	}

	return $classes;

}

/***************************************************
/ <p> and <br /> Fixes
/***************************************************/

function ptobr($string){
	return preg_replace("/<\/p>[^<]*<p>/", "<br /><br />", $string);
}
function stripp($string){
	return preg_replace('/(<p>|<\/p>)/i','',$string) ;
}
add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');

function prefix_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}

/***************************************************
/ Remove UL's from navigation menus
/***************************************************/

function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

/***************************************************
/ Site Navigation Menus
/***************************************************/

if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
            'main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
  		)
  	);
}

/***************************************************
/ Move YOAST to bottom
/***************************************************/

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


/***************************************************
/ Title Tag
/***************************************************/

add_theme_support( 'title-tag' );

/***************************************************
/ Options Pages
/***************************************************
if(function_exists('acf_add_options_page')) {

	acf_add_options_page();
    acf_add_options_sub_page('Misc');

} */

/***************************************************
/ ADD PARENT SLUG TO BODY CLASS
/***************************************************/

add_filter('body_class','body_class_section');

function body_class_section($classes) {
    global $wpdb, $post;
    if (is_page()) {
        if ($post->post_parent) {
            $parent  = end(get_post_ancestors($current_page_id));
        } else {
            $parent = $post->ID;
        }
        $post_data = get_post($parent, ARRAY_A);
        $classes[] = 'parent-' . $post_data['post_name'];
    }
    return $classes;
}

function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/***************************************************
/ Project Post Type
/***************************************************/

add_action( 'init', 'register_cpt_project' );

function register_cpt_project() {

    $labels = array(
        'name' => _x( 'Project', 'project' ),
        'singular_name' => _x( 'Project', 'project' ),
        'add_new' => _x( 'Add New', 'project' ),
        'add_new_item' => _x( 'Add New', 'project' ),
        'edit_item' => _x( 'Edit', 'project' ),
        'new_item' => _x( 'New', 'project' ),
        'view_item' => _x( 'View', 'project' ),
        'search_items' => _x( 'Search', 'project' ),
        'not_found' => _x( 'None found', 'project' ),
        'not_found_in_trash' => _x( 'None found in bin', 'project' ),
        'parent_item_colon' => _x( 'Parent:', 'project' ),
        'menu_name' => _x( 'Projects', 'project' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for projects',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author' ),
        //'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'menu_icon' => 'dashicons-admin-multisite',
        'capability_type' => 'post',
        'show_in_rest' => true
    );

    register_post_type( 'project', $args );
}

/***************************************************
/ Project Post Type
/***************************************************/

add_action( 'init', 'register_cpt_team' );

function register_cpt_team() {

    $labels = array(
        'name' => _x( 'Team', 'team' ),
        'singular_name' => _x( 'Team', 'team' ),
        'add_new' => _x( 'Add New', 'team' ),
        'add_new_item' => _x( 'Add New team member', 'team' ),
        'edit_item' => _x( 'Edit team member', 'team' ),
        'new_item' => _x( 'New', 'team' ),
        'view_item' => _x( 'View', 'team' ),
        'search_items' => _x( 'Search', 'team' ),
        'not_found' => _x( 'None found', 'team' ),
        'not_found_in_trash' => _x( 'None found in bin', 'team' ),
        'parent_item_colon' => _x( 'Parent:', 'team' ),
        'menu_name' => _x( 'Team', 'team' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for team members ',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author' ),
        //'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'menu_icon' => 'dashicons-groups',
        'capability_type' => 'post',
        'show_in_rest' => true
    );

    register_post_type( 'team', $args );
}

/***************************************************
/ Change "Posts" to "News"
/***************************************************/
function jc_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
}
add_action( 'admin_menu', 'jc_change_post_label' );

/***************************************************
/ Remove Comments Functionality
/***************************************************/
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
remove_post_type_support( 'page', 'comments' );
remove_post_type_support( 'post', 'comments' );
}

/* Remove label */
function custom_menu_page_removing() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'custom_menu_page_removing' );
