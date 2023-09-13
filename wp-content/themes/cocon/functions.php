<?php
define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_PATH', get_stylesheet_directory());
define('POSTS_PER_PAGE', 8);
define('ORDERBY', 'date');
define('ORDER', 'DESC');

// REGISTER POST TYPE BLOG
function create_blog_post_type()
{
    $labels = array(
        'name' => 'Blogs',
        'singular_name' => 'Blog',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'category' ),
    );

    register_post_type('blog', $args);
}
add_action('init', 'create_blog_post_type');

// ADD TAXONOMY "CATEGORY" FOR POST TYPE "BLOG"
function add_category_to_blog()
{
    register_taxonomy_for_object_type('category', 'blog');
}

// REGISTER POST TYPE NEW
function create_new_post_type()
{
    $labels = array(
        'name' => 'News',
        'singular_name' => 'New',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
    );

    register_post_type('new', $args);
}
add_action('init', 'create_new_post_type');

// ADD TAXONOMY "CATEGORY" FOR POST TYPE "BLOG"
function add_category_to_new()
{
    register_taxonomy_for_object_type('category', 'new');
}


// REGISTER TO USE IMAGES FOR ARTICLES
add_action('init', 'add_category_to_blog');
add_action('init', 'add_category_to_new');
add_action('after_setup_theme', 'blog_theme_support');

function blog_theme_support()
{
    // REGISTER MENU
    register_nav_menus([
        'primary' =>  'Primary Menu',
    ]);
    // REGISTER TO USE IMAGES FOR ARTICLES
    add_theme_support('post-formats');
    add_theme_support('post-thumbnails');
}

// THE THEME URL
if (!function_exists('themeUrl')):
	function themeUrl()
	{
		echo THEME_URL;
	}
endif;

// QUERY POST OF POST TYPE BLOG OF CATEGORY FUNCTION
function custom_query_for_category_blog() {
    $current_category = get_queried_object();
    $args = array(
        'post_type' => 'blog',
        'posts_per_page' => POSTS_PER_PAGE,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        'orderby' => 'ORDERBY',
        'order' => 'ORDER',
        'cat' => $current_category->cat_ID
    );
    $the_query = new WP_Query($args);
    return $the_query;
}

// QUERY POST OF CATEGORY お知らせ POST TYPE NEW FUNCTION
function custom_query_for_category_notice() {
    $args = array(
        'post_type' => 'new',
        'category_name' => 'notice',
        'posts_per_page' => 3
    );
    $query = new WP_Query($args);
    return $query;
}

// QUERY POST OF CATEGORY お悩み相談室 POST TYPE NEW FUNCTION
function custom_query_for_category_room() {
    $args = array(
        'post_type' => 'new',
        'category_name' => 'consultation-room',
        'posts_per_page' => 4
    );
    $query = new WP_Query($args);
    return $query;
}

// QUERY POST OF POST TYPE NEW, CATEGORY FUNCTION
function custom_query_for_category_new() {
    $current_category = get_queried_object();
    $args = array(
        'post_type' => 'new',
        'posts_per_page' => POSTS_PER_PAGE,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        'orderby' => 'ORDERBY',
        'order' => 'ORDER',
        'cat' => $current_category->cat_ID
    );
    $the_query = new WP_Query($args);
    return $the_query;
}

// FUNCTION GET THE TITLE FOR PAGE
function custom_wp_title($title) {
    if (is_page()) {
        $title = get_the_title();
    } elseif (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_single()) {
        $categories = get_the_category();
        if (!empty($categories)) {
            $title = $categories[0]->name . ' - ' . get_the_title();
        }
    }
    return $title;
}
add_filter('wp_title', 'custom_wp_title', 10, 1);

// BREADCRUMB 
function loadplus_breadcrumb() {
    if(function_exists('bcn_display')){
        bcn_display();
    }
}
require get_stylesheet_directory() . '/inc/add-assets.php';